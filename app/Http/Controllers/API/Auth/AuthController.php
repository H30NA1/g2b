<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Services\Api\UserService;
use App\Services\Api\TokenService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Throwable;

class AuthController extends Controller
{
    private $userService;
    private $tokenService;

    public function __construct(
        UserService $userService,
        TokenService $tokenService
        )
    {
        $this->userService = $userService;
        $this->tokenService = $tokenService;
    }

    public function login(LoginRequest $request)
    {
        try {
            DB::beginTransaction();
            $credentials = $request->all();
            if (!Auth::attempt($credentials)) {
                return response()->json(['message' => 'Email or Password not correct. Please check again!!'], 404);
            }
            
            $user = $request->user();
            $token = $this->tokenService->retrieveUserToken($user, $request);

            DB::commit();
            return response()->json([
                'token' => $token->access_token,
                'user' => $user,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($token->token_expires_at)->toDateTimeString()
            ], 200);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function register(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $user = $this->userService->createUser($data);

            $token = $this->tokenService->retrieveUserToken($user, $request);
            DB::commit();
            return response(compact('user', 'token'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function logout(Request $request)
    {
        try {
            $user = auth('sanctum')->user();
            if (!isset($user)) {
                return response()->json(['message' => 'Already Logged Out!!'], 200);
            }
            $token = $user->currentAccessToken();
            if (!isset($token)) {
                return response()->json(['message' => 'No Token Exists! Assume Already Logged Out!'], 200);
            }

            $token->delete();
            return response()->json(['message' => 'Successfully Logged Out!!'], 200);
        } catch (Throwable $e) {
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
