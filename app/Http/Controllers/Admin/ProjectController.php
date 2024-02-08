<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('admin.pages.projects.index');
    }

    public function activities()
    {
        return view('admin.pages.projects.activities.index');
    }

    public function budgets()
    {
        return view('admin.pages.projects.budgets.index');
    }

    public function files()
    {
        return view('admin.pages.projects.files.index');
    }

    public function fileManager()
    {
        return view('admin.pages.projects.file-manager.index');
    }

    public function overview($id = NULL)
    {
        return view('admin.pages.projects.overview.index');
    }

    public function settings()
    {
        return view('admin.pages.projects.settings.index');
    }

    public function targets()
    {
        return view('admin.pages.projects.targets.index');
    }

    public function users()
    {
        return view('admin.pages.projects.users.index');
    }
}
