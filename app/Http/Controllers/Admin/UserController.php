<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.users.index');
    }

    public function campaigns()
    {
        return view('admin.pages.users.campaigns.index');
    }

    public function documents()
    {
        return view('admin.pages.users.documents.index');
    }

    public function followers()
    {
        return view('admin.pages.users.followers.index');
    }

    public function overview()
    {
        return view('admin.pages.users.overview.index');
    }

    public function projects()
    {
        return view('admin.pages.users.projects.index');
    }
}
