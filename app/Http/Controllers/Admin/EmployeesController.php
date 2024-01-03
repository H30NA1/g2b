<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.employees.index');
    }

    public function add()
    {
        return view('admin.pages.employees.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.employees.index');
    }

    public function edit()
    {
        return view('admin.pages.employees.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.employees.index');
    }
}
