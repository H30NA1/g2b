<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.blog.index');
    }

    public function add()
    {
        return view('admin.pages.blog.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.blog.index');
    }

    public function edit()
    {
        return view('admin.pages.blog.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.blog.index');
    }
}
