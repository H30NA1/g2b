<?php

namespace App\Services\Admin;

use App\Repositories\Admin\AccessTokenRepository;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;

class TokenService
{
    protected $accessTokenRepository;

    public function __construct(
        AccessTokenRepository $accessTokenRepository
    ) {
        $this->accessTokenRepository = $accessTokenRepository;
    }

    public function retrieveUserToken($user, $request)
    {
        $tokenData = $this->prepareTokenData($user, $request);
        $token = $this->accessTokenRepository->retrieveUserToken($user->id);
        
        if (isset($token)) {
            $this->accessTokenRepository->updateUserToken($user->id, $tokenData);
            $token->refresh();
        } else {
            $token = $this->accessTokenRepository->create($tokenData);
        }

        return $token;
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
