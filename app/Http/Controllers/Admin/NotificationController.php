<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\NotificationService;
use App\Services\Admin\UserRequestService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class NotificationController extends Controller
{
    private $notificationService;

    public function __construct(
        NotificationService $notificationService,
    ) {
        $this->notificationService = $notificationService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $userNotifications = $this->notificationService->getNotifications($data);
            return view('pages.notifications.index', compact('userNotifications'));
        } catch (Throwable $e) {
            report($e);
            dd($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function read(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->notificationService->read($id);
            DB::commit();
            return redirect()->route('web.notifications.index')->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.notifications.index')->withErrors($e->getMessage());
        }
    }

    public function revert(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->notificationService->revert($id);
            DB::commit();
            return redirect()->route('web.notifications.index')->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.notifications.index')->withErrors($e->getMessage());
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->notificationService->delete($id);
            DB::commit();
            return redirect()->route('web.notifications.index')->withStatus(trans('common.delete_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.notifications.index')->withErrors($e->getMessage());
        }
    }
}
