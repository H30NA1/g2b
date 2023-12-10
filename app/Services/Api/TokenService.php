<?php

namespace App\Services\Api;

use App\Repositories\Api\AccessTokenRepository;
use Illuminate\Support\Facades\Hash;

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
            $token = $this->accessTokenRepository->updateUserToken($user->id, $tokenData);
        } else {
            $token = $this->accessTokenRepository->create($tokenData);
        }

        return $token;
    }

    private function prepareTokenData($user, $request)
    {
        $tokenData = $user->createToken('Personal Access Token');
        
        return  [
            'user_id' => $user->id,
            'access_token' => $tokenData->accessToken,
            'ip_address' => $request->ip(),
            'last_logged_in' => now(),
            'user_agent' => $request->header('HTTP_USER_AGENT'),
            'is_active' => true,
            'token_expires_at' => $tokenData->expires_at,
        ];
    }
}
