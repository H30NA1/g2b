<?php

namespace App\Http\Controllers\Admin\Pages\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
    }

    public function project()
    {
        return view('admin.pages.user-profile.projects.index');
    }
}
