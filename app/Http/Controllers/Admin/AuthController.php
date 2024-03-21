<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\ResetRequest;
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

    public function login(LoginRequest $request)
    {
        if (request()->method() == 'GET') {
            return view('pages.auth.login');
        }

        try {
            DB::beginTransaction();

            $credentials = $request->all();
            $column = filter_var($credentials['id'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            if (!$this->guard()->attempt([$column => $credentials['id'], 'password' => $credentials['password']])) {
                return redirect()->route('web.login')->withErrors('Email or Password not correct. Please check again!!');
            }

            $user = $request->user();
            $this->tokenService->retrieveUserToken($user, $request);
            DB::commit();
            return redirect()->route('web.index');
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.login')->withErrors('Your are not authenticated. Please try to login again!');
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
            return redirect()->route('web.login')->with(['message' => 'Successfully Logout!', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function forgot(ForgotRequest $request)
    {
        if (request()->method() == 'GET') {
            return view('pages.auth.forgot');
        }

        try {
            DB::beginTransaction();
            $this->tokenService->sendForgotPassword($request);
            DB::commit();
            return redirect()->route('web.login')->with(['message' => 'Successfully Sent ! Please wait for your leader or admin to accept', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.forgot')->withErrors($e->getMessage());
        }
    }

    public function reset(ResetRequest $request)
    {
        $data = $request->all();
        $information =  json_decode(base64_decode($data['information'], true), true);
        if (!isset($information) && empty($information)) {
            dd(empty($information));
            return redirect()->route('web.login')->with(['message' => 'Unable To retrieve employee Information. Please try again!']);
        }

        if (request()->method() == 'GET') {
            return view('pages.auth.reset');
        }

        try {
            DB::beginTransaction();
            $this->userService->updateUser($information['user_id'], $data);
            DB::commit();
            return redirect()->route('web.login')->with(['message' => 'Successfully Updated', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            dd($e);
            return redirect()->route('web.reset')->withErrors($e->getMessage());
        }
    }
}
