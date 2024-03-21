<?php

namespace App\Services\Admin;

use App\Mail\Auth\ForgotPasswordEmail;
use App\Models\UserRequest;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserRequestService
{
    public function getRequests($dataRequest)
    {
        // Fetch all pending requests and eager load related models
        $model = UserRequest::with(['employee', 'requestHandler']);

        if (isset($dataRequest['limit'])) {
            $model = $model->limit($dataRequest['limit']);
        }

        $requests = $model->orderByDesc('id')->get();

        if (isset($dataRequest['display']) && $dataRequest['display'] == 'all') {
            return $requests;
        }
        // Initialize arrays to hold pending requests and counts
        $pendingRequests = [
            'authorization' => collect(),
            'overtime' => collect(),
            'leave' => collect(),
            'reset-account' => collect(),
        ];
        $pendingCounts = [
            'authorization' => 0,
            'overtime' => 0,
            'leave' => 0,
            'reset-account' => 0,
        ];

        // Group requests by type and count pending requests
        foreach ($requests as $request) {
            if ($request->status == 'pending') {
                $pendingRequests[$request->type]->push($request);
                $pendingCounts[$request->type]++;
            }
        }

        // Fetch all completed requests
        $completedRequests = $requests->reject(function ($request) {
            return $request->status == 'pending';
        });

        return [
            'pending' => array_sum($pendingCounts),
            'authorization' => $pendingRequests['authorization'],
            'overtime' => $pendingRequests['overtime'],
            'leave' => $pendingRequests['leave'],
            'reset-account' => $pendingRequests['reset-account'],
            'all' => $completedRequests,
        ];
    }

    public function allow($id)
    {
        $request = UserRequest::findOrFail($id);
        $request->status = 'approved';
        $request->request_handler_id = Auth::user()->id;
        $request->approved_at = now();
        $request->save();

        if ($request->type == 'authorization') {
            $role = UserRole::where('user_id', $request->user_id)->first();
            if (!isset($role)) {
                abort(404);
            }
            $permission = json_decode($role->permission, true);
            array_walk($permission, function (&$item) use ($request) {
                if ($item['route'] == $request->destination) {
                    $item['method'] = array_fill_keys(['GET', 'POST', 'PUT', 'DELETE', 'HEAD', 'OPTIONS'], 1);
                    $item['can_access'] = 1;
                }
            });
        } else if ($request->type == 'reset-account') {
            $emailContent = [
                'user_id' => $request->employee->id,
                'username' => $request->employee->username,
                'email' => $request->employee->email,
            ];

            $emailContent['url'] = route('web.reset', ['information' => base64_encode(json_encode($emailContent))]);

            Mail::to($request->employee->email)->send(new ForgotPasswordEmail($emailContent));
        }

        return true;
    }

    public function reject($id)
    {
        $request = UserRequest::findOrFail($id);
        $request->status = 'rejected';
        $request->request_handler_id = Auth::user()->id;
        $request->rejected_at = now();
        $request->save();
        return true;
    }

    public function revert($id)
    {
        $request = UserRequest::findOrFail($id);
        $request->status = 'pending';
        $request->request_handler_id = Auth::user()->id;
        $request->reverted_at = now();
        return $request->save();
    }

    public function delete($id)
    {
        $request = UserRequest::findOrFail($id);
        return $request->delete();
    }
}
