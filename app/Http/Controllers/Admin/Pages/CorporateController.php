<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function __construct()
    {
    }

    public function about()
    {
        return view('admin.pages.corporate.about.index');
    }
    
    public function contact()
    {
        return view('admin.pages.corporate.contact.index');
    }

    public function licenses()
    {
        return view('admin.pages.corporate.licenses.index');
    }

    public function pricing()
    {
        return view('admin.pages.corporate.pricing.index');
    }

    public function sitemap()
    {
        return view('admin.pages.corporate.sitemap.index');
    }

    public function team()
    {
        return view('admin.pages.corporate.team.index');
    }
}
