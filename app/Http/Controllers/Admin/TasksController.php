<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.tasks.index');
    }

    public function summary()
    {
        return view('admin.pages.tasks.summary');
    }

    public function add()
    {
        return view('admin.pages.tasks.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.tasks.index');
    }

    public function edit()
    {
        return view('admin.pages.tasks.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.tasks.index');
    }
}
