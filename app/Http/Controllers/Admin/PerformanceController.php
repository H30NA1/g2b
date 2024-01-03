<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.performance.index');
    }

    public function add()
    {
        return view('admin.pages.performance.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.performance.index');
    }

    public function edit()
    {
        return view('admin.pages.performance.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.performance.index');
    }
}
