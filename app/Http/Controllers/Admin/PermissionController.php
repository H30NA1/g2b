<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\PermissionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class PermissionController extends Controller
{
    private $permissionService;

    public function __construct(
        PermissionService $permissionService
    ) {
        $this->permissionService = $permissionService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $permissions = $this->permissionService->getPermissions($data);
            return view('pages.permission.index', compact('permissions'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function detail($id)
    {
        try {
            $permission = $this->permissionService->getPermission($id);
            return view('pages.permission.detail', compact('permission', 'id'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.permission.index')->withErrors($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $this->permissionService->updatePermissions($id, $data['permission']);
            DB::commit();
            return redirect()->route('web.permission.detail', ['id' => $id])->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.permission.index')->withErrors($e->getMessage());
        }
    }

    public function refresh($id)
    {
        try {
            DB::beginTransaction();
            $this->permissionService->refreshPermissions($id);
            DB::commit();
            return redirect()->route('web.permission.detail', ['id' => $id])->withStatus(trans('common.refresh_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.permission.index')->withErrors($e->getMessage());
        }
    }

    public function reset($id)
    {
        try {
            DB::beginTransaction();
            $this->permissionService->refreshPermissions($id, ['action' => 'reset']);
            DB::commit();
            return redirect()->route('web.permission.detail', ['id' => $id])->withStatus(trans('common.reset_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.permission.index')->withErrors($e->getMessage());
        }
    }
}
