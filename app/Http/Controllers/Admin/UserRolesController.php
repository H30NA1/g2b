<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Throwable;

class UserRolesController extends Controller
{
    private $userService;

    public function __construct(
        UserService $userService
    ) {
        $this->userService = $userService;
    }

    public function index($id)
    {
        try {
            $role = $this->userService->getUserRoles($id);
            return view('pages.employees.roles.index', compact('role'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.employees.index')->withErrors($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $this->userService->updateUserRoles($id, $data['role']);
            DB::commit();
            return redirect()->route('web.employees.roles.index', ['id' => $id])->with(['message', 'Successfully Updated', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.employees.index')->withErrors($e->getMessage());
        }
    }

    public function refresh($id)
    {
        try {
            DB::beginTransaction();
            $this->userService->refreshUserRoles($id);
            DB::commit();
            return redirect()->route('web.employees.roles.index', ['id' => $id])->with(['message', 'Successfully Updated', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.employees.index')->withErrors($e->getMessage());
        }
    }
}
