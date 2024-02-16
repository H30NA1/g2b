<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index($id = NULL)
    {
        return view('admin.pages.users.index');
    }

    public function store()
    {
        try {
            DB::beginTransaction();

            DB::commit();
            return redirect()->route('admin.pages.users.index')->with(['success' => 'User created successfully!']);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withInput()->withErrors($e, 'message');
        }
    }

    public function documents($id = NULL)
    {
        return view('admin.pages.users.documents.index');
    }

    public function update($id = NULL)
    {
        try {
            DB::beginTransaction();

            DB::commit();
            return redirect()->route('admin.pages.users.index')->with(['success' => 'User Updated successfully!']);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withInput()->withErrors($e, 'message');
        }
    }

    public function delete($id = NULL)
    {
        try {
            DB::beginTransaction();

            DB::commit();
            return redirect()->route('admin.pages.users.index')->with(['success' => 'User Deleted successfully!']);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withInput()->withErrors($e, 'message');
        }
    }

    public function overview($id = NULL)
    {
        dd('in');
        return view('admin.pages.users.overview.index');
    }

    public function projects($id = NULL)
    {
        return view('admin.pages.users.projects.index');
    }
}
