<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Services\Admin\UserService;
use App\Services\Admin\TokenService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class AuthController extends Controller
{
    private $userService;
    private $tokenService;

    public function __construct(
        UserService $userService,
        TokenService $tokenService
    ) {
        $this->userService = $userService;
        $this->tokenService = $tokenService;
    }

    public function index(Request $request)
    {
        if (request()->method() == 'GET') {
            return view('admin.pages.auth.index');
        }
        try {
            DB::beginTransaction();

            $credentials = $request->all();
            $column = filter_var($credentials['id'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            if (!$this->guard()->attempt([$column => $credentials['id'], 'password' => $credentials['password']])) {
                return redirect()->route('admin.login')->with(['message' => 'Email or Password not correct. Please check again!!', 'code' => 403]);
            }

            $user = $request->user();
            $this->tokenService->retrieveUserToken($user, $request);
            DB::commit();
            return redirect()->route('admin.index');
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('admin.login')->withErrors($e->getMessage())->withInput();
        }
    }

    private function guard()
    {
        return Auth::guard();
    }

    public function logout(Request $request)
    {
        try {
            DB::beginTransaction();
            auth()->user()->userToken->update([
                'is_active' => 0
            ]);
            
            $this->guard()->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            DB::commit();
            return redirect()->route('admin.login')->with(['message' => 'Successfully Logout!', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('admin.index')->withErrors($e->getMessage())->withInput();
        }
    }

    public function forgot(Request $request)
    {
        if (request()->method() == 'GET') {
            return view('admin.pages.auth.forgot.index');
        }

        try {
            DB::beginTransaction();
            $this->tokenService->sendForgotPassword($request);
            DB::commit();
            return redirect()->route('admin.login')->with(['message' => 'Successfully Sent', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('admin.forgot')->withErrors($e->getMessage())->withInput();
        }
    }
}
