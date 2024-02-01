<?php

namespace App\Http\Controllers\Admin\Pages\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function __construct()
    {
    }
    
    public function campaign()
    {
        return view('admin.pages.user-profile.campaigns.index');
    }
}
