<?php

namespace App\Http\Controllers\Admin\Pages\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TargetsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.project.targets.index');
    }
}