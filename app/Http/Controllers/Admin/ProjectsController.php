<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ProjectService;
use Illuminate\Http\Request;
use Throwable;

class ProjectsController extends Controller
{
    private $projectService;

    public function __construct(
            ProjectService $projectService
        )
    {
       $this->projectService = $projectService; 
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $projects = $this->projectService->getProjects($data);
            return view('admin.pages.projects.index', compact('projects'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('admin.index');
        }
    }


    public function add()
    {
        return view('admin.pages.projects.add');
    }

    
    public function store()
    {
        return redirect()->route('admin.projects.index');
    }

    public function edit()
    {
        return view('admin.pages.projects.edit');
    }

    
    public function update()
    {
        return redirect()->route('admin.projects.index');
    }
}
