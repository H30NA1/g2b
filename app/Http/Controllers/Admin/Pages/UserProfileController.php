<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function __construct()
    {
    }

    public function activity()
    {
        return view('admin.pages.user-profile.activities.index');
    }
    
    public function campaign()
    {
        return view('admin.pages.user-profile.campaigns.index');
    }

    public function document()
    {
        return view('admin.pages.user-profile.documents.index');
    }

    public function follower()
    {
        return view('admin.pages.user-profile.followers.index');
    }

    public function overview()
    {
        return view('admin.pages.user-profile.overview.index');
    }

    public function project()
    {
        return view('admin.pages.user-profile.projects.index');
    }
}
