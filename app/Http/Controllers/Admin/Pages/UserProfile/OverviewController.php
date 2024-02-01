<?php

namespace App\Http\Controllers\Admin\Pages\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function __construct()
    {
    }
    public function overview()
    {
        return view('admin.pages.user-profile.overview.index');
    }
}
