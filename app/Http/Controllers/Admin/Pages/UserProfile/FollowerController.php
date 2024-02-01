<?php

namespace App\Http\Controllers\Admin\Pages\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function __construct()
    {
    }

    public function follower()
    {
        return view('admin.pages.user-profile.followers.index');
    }
}
