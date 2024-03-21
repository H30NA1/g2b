<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Http\Requests\Users\UpdateRequest;
use App\Models\User;
use App\Services\Admin\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Throwable;

class UserController extends Controller
{
    private $userService;

    public function __construct(
        UserService $userService
    ) {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $employees = $this->userService->getUsers($data);
            
            return view('pages.employees.index', compact('employees'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.employees.index')->withErrors($e->getMessage());
        }
    }

    public function detail($id = NULL)
    {
        try {
            $employee = null;
            if (isset($id)) {
                $employee = $this->userService->getUser($id);
            }
            
            return view('pages.employees.detail', compact('employee'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.employees.index')->withErrors($e->getMessage());
        }
    }

    public function store(StoreRequest $request)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $this->userService->createUser($data);
            DB::commit();
            return redirect()->route('web.employees.index')->with(['message', 'Successfully Created', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.employees.index')->withErrors($e->getMessage());
        }
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $this->userService->updateUser($id, $data);
            DB::commit();
            return redirect()->route('web.employees.detail', ['id' => $id])->with(['message', 'Successfully Updated', 'code' => 200]);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.employees.index')->withErrors($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $this->userService->deleteUser($id);
            DB::commit();
            return redirect()->route('web.employees.index')->withStatus(trans('common.delete_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.employees.index')->withErrors($e->getMessage());
        }
    }
}
