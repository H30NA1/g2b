<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.core.index');
    }

    public function add()
    {
        return view('admin.pages.core.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.core.index');
    }

    public function edit()
    {
        return view('admin.pages.core.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.core.index');
    }
}
