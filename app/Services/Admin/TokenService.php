<?php

namespace App\Services\Admin;

use App\Mail\Auth\ForgotPasswordEmail;
use App\Models\AccessToken;
use App\Models\User;
use App\Models\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;


class TokenService
{
    public function __construct()
    {
    }

    public function retrieveUserToken($user, $request)
    {
        $tokenData = $this->prepareTokenData($user, $request);
        $token = AccessToken::where('user_id', $user->id)->first();

        if (isset($token)) {
            AccessToken::where('user_id', $user->id)->update($tokenData);
            $token->refresh();
        } else {
            $token = AccessToken::create($tokenData);
        }

        return $token;
    }

    public function requestResetPassword($request)
    {
        $email = $request->get('email');
        $user = User::where('email', $email)->first();
        if (!isset($user)) {
            abort(404, 'User Not Found');
        }
        
        return true;
    }

    public function sendForgotPassword($request)
    {
        $email = $request->get('email');
        $user = User::where('email', $email)->first();
        if (!isset($user)) {
            abort(404, 'User Not Found');
        }
        
        $userRequest = UserRequest::where('user_id', $user->id)
        ->where('destination', 'reset-page')
        ->where('type', 'reset-account')
        ->whereMonth('requested_at', now()->month)->first();

        if (isset($userRequest) ) {
            abort(403, 'You have send the email. PLease wait for admin and leader to response');
        }
        
        UserRequest::create([
            'user_id' => $user->id,
            'title' => 'Request Reset Password',
            'content' => 'User ' . $user->username . 'sent a reset password allowance!',
            'destination' => 'reset-page',
            'type' => 'reset-account',
            'status' => 'pending',
            'requested_at' => now(),
        ]);
        return true;
    }

    private function prepareTokenData($user, $request)
    {
        $tokenData = $user->createToken('Personal Access Token');
        $ip = $this->getClientIP($request);
        return  [
            'user_id' => $user->id,
            'access_token' => $tokenData->accessToken,
            'ip_address' => $ip,
            'last_logged_in' => now(),
            'user_agent' => $request->header('user-agent'),
            'is_active' => true,
            'token_expires_at' => now()->addDay()->endOfDay(),
            'location' => ($ip === '127.0.0.1' || $ip === '::1') ? Location::get($request->ip()) : null
        ];
    }

    private function getClientIP($request)
    {
        $clientIP = $request->ip();

        $proxies = [
            'X-Forwarded-For',
            'HTTP_X_FORWARDED_FOR',
            'CF-Connecting-IP',
            'True-Client-IP',
            'X-Real-IP',
            'Proxy-Client-IP',
            'WL-Proxy-Client-IP',
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED',
            'HTTP_X_CLUSTER_CLIENT_IP',
            'Forwarded',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'REMOTE_ADDR'
        ];

        foreach ($proxies as $proxy) {
            if ($request->hasHeader($proxy)) {
                $clientIP = $request->header($proxy);
                break;
            }
        }

        return $clientIP;
    }
}
