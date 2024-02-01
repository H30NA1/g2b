<?php

namespace App\Http\Controllers\Admin\Pages\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __construct()
    {
    }

    public function activity()
    {
        return view('admin.pages.user-profile.activities.index');
    }
}
