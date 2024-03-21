<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tasks\StoreRequest;
use App\Http\Requests\Tasks\UpdateRequest;
use App\Http\Resources\Task\IndexResource;
use App\Http\Resources\Task\ShowResource;
use App\Http\Resources\Task\StoreResource;
use App\Http\Resources\Task\UpdateResource;
use App\Services\Admin\UserService;
use App\Services\Admin\ProjectService;
use App\Services\Admin\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class TasksController extends Controller
{
    private $taskService;

    private $projectService;

    private $userService;

    const ROUTE_INDEX_PATH = 'web.tasks.index';

    public function __construct(
        TaskService $taskService,
        ProjectService $projectService,
        UserService $userService
    ) {
        $this->taskService = $taskService;
        $this->projectService = $projectService;
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $tasks = $this->taskService->getTasks($data);
            return view('pages.tasks.index', compact('tasks'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->with(['fail', $e->getMessage()]);
        }
    }

    public function summary(Request $request)
    {
        $data = $request->all();
        try {
            $tasks = $this->taskService->getTasks($data);
            return view('pages.tasks.summary', compact('tasks'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->with(['fail', $e->getMessage()]);
        }
    }

    public function show($id)
    {
        try {
            $task = $this->taskService->getTask($id);
            $projects = $this->projectService->getProjects([]);
            $users = $this->userRepo->getUsersWithoutCurrentLogin();
            return view('pages.tasks.detail', compact('task', 'projects', 'users'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->back()->withErrors(trans('common.error'));
        }
    }

    public function store(StoreRequest $request)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $task = $this->taskService->createTask($data);
            DB::commit();
            $task->refresh();

            return redirect()->route(self::ROUTE_INDEX_PATH);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withErrors(trans('common.create_failed'));
        }
    }

    public function create()
    {
        try {
            $projects = $this->projectService->getProjects([]);
            $users = $this->userRepo->getUsersWithoutCurrentLogin();
            return view('pages.tasks.create', compact('projects', 'users'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->back()->withErrors(trans('common.error'));
        }
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $task = $this->taskService->updateTask($data, $id);
            DB::commit();
            $task->refresh();
            return redirect()->back()->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withErrors(trans('common.update_failed'));
        }
    }

    public function change(Request $request, $id)
    {
        $data = $request->except('_token');
        try {
            DB::beginTransaction();
            $task = $this->taskService->change($data, $id);
            DB::commit();
            return redirect()->back()->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withErrors(trans('common.update_failed'));
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $this->taskService->deleteTask($id);
            DB::commit();
            return response()->json([
                'message' => 'Successfully'
            ], 200);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
