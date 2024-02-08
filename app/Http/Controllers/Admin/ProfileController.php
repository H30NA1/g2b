<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.profile.index');
    }

    public function logs()
    {
        return view('admin.pages.profile.logs.index');
    }

    public function activity()
    {
        return view('admin.pages.profile.activity.index');
    }

    public function security()
    {
        return view('admin.pages.profile.security.index');
    }

    public function settings()
    {
        return view('admin.pages.profile.settings.index');
    }
}
