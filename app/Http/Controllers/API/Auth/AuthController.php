<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Auth\LoginRequest;
use App\Http\Requests\API\Auth\RegisterRequest;
use App\Services\API\UserService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class AuthController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $userService = $userService;
    }

    public function login(LoginRequest $request)
    {
        try {
            $credentials = $request->validate();
            if (!Auth::attempt($credentials)) {
                return response()->json(['message' => 'Email or Password not correct. Please check again!!'], 404);
            }

            $user = $request->user();
            $tokenData = $user->createToken('Personal Access Token')->plainTextToken;

            return response()->json([
                'access_token' => $tokenData->accessToken,
                'role' => $user->user_type,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenData->token->expires_at)->toDateTimeString()
            ], 200);
        } catch (Throwable $e) {
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function register(RegisterRequest $request)
    {
        try {
            $data = $request->validate();

            $user = $this->userService->createUser($data);

            $token = $user->createToken('Personal Access Token')->plainTextToken;

            return response(compact('user', 'token'));
        } catch (Throwable $e) {
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    public function logout(Request $request)
    {
        try {
            $request->user()->token()->revoke();
            return response()->json(['message' => 'Successfully Logged Out!!'], 200);
        } catch (Throwable $e) {
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
        
    }
}
