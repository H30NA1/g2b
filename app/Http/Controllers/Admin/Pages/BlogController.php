<?php

namespace App\Http\Controllers\Admin\Pages;

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

    public function post()
    {
        return view('admin.pages.blog.post');
    }
}
