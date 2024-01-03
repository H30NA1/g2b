<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.projects.index');
    }

    public function add()
    {
        return view('admin.pages.projects.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.projects.index');
    }

    public function edit()
    {
        return view('admin.pages.projects.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.projects.index');
    }
}
