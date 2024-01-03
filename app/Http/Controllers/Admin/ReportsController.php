<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.reports.index');
    }

    public function add()
    {
        return view('admin.pages.reports.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.reports.index');
    }

    public function edit()
    {
        return view('admin.pages.reports.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.reports.index');
    }
}
