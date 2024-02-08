<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.file-manager.index');
    }

    public function settings()
    {
        return view('admin.pages.file-manager.settings.index');
    }
}
