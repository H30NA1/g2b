<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Profile\IndexResource;
use Throwable;
use App\Services\Admin\UserService;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    private $userService;

    public function __construct(
        UserService $userService
    ) {
        $this->userService = $userService;
    }

    public function index()
    {
        try {
            $user = $this->userService->getProfile(auth()->id());
            return view('pages.profile.index', compact('user'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function setting()
    {
        try {
            $user = $this->userService->getProfile(auth()->id());
            return view('pages.profile.setting', compact('user'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function edit()
    {
        try {
            $user = $this->userService->getProfile(auth()->id());
            return view('pages.profile.detail', compact('user'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function update(Request $request)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $user = $this->userService->updateUser(auth()->id(), $data);
            DB::commit();
            return view('pages.profile.index', compact('user'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }
}
