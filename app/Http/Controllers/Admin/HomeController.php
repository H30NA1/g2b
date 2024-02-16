<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\UserService;
use App\Services\Admin\ProjectService;
use App\Services\Admin\TaskService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $userService;
    private $projectService;
    private $taskService;

    public function __construct(
        UserService $userService, 
        ProjectService $projectService,
        TaskService $taskService,
        )
    {
        $this->userService = $userService;
        $this->projectService = $projectService;
        $this->taskService = $taskService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        $users = $this->userService->getUsers($data);
        $projects = $this->projectService->getProjects($data);
        $tasks = $this->taskService->getTasks($data);
        return view('admin.pages.index', compact('users', 'projects', 'tasks'));
    }
}
