<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        return view('web.index');
    }

    public function about()
    {
        return view('web.pages.about.index');
    }

    public function contact()
    {
        return view('web.pages.contact.index');
    }
}
