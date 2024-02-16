<?php

namespace App\Services;

use App\Mail\Auth\ForgotPasswordEmail;
use App\Models\AccessToken;
use App\Models\User;
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

    public function sendForgotPassword($request)
    {
        $email = $request->get('email');
        $user = User::where('email', $email)->first();
        if (!isset($user)) {
            abort(404, 'User Not Found');
        }
        $emailContent = [
            'user_id' => $user->id,
            'username' => $user->username,
            'email' => $user->email,
        ];
        
        $emailContent['url'] = route('web.reset', ['information' => base64_encode(json_encode($emailContent)) ]);

        Mail::to($email)->send(new ForgotPasswordEmail($emailContent));
        
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
