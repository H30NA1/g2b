<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.careers.index');
    }

    public function apply()
    {
        return view('admin.pages.careers.apply');
    }
}
