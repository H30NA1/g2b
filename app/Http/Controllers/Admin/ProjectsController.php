<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Projects\StoreRequest;
use App\Http\Requests\Projects\UpdateRequest;
use App\Services\Admin\UserService;
use App\Services\Admin\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ProjectsController extends Controller
{
    private $projectService;

    private $userService;

    const ROUTE_INDEX_PATH = 'web.projects.index';

    public function __construct(
        ProjectService $projectService,
        UserService $userService
    ) {
        $this->projectService = $projectService;
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $projects = $this->projectService->getProjects($data);
            return view('pages.projects.index', compact('projects'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors(trans('common.delete_failed'));
        }
    }

    public function create()
    {
        try {
            $users = $this->userRepo->getUsersWithoutCurrentLogin();
            return view('pages.projects.create',compact('users'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->back()->withErrors(trans('common.error'));
        }
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        try {
            DB::beginTransaction();
            $project = $this->projectService->createProject($data);
            DB::commit();

            $project->refresh();

            return redirect()->route(self::ROUTE_INDEX_PATH);
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withErrors(trans('common.create_failed'));
        }
    }

    public function show($id)
    {
        try {
            $project = $this->projectService->getProject($id);
            $users = $this->userRepo->getUsersWithoutCurrentLogin();
            $users_project_id = $project->users()->pluck('id');
           return view('pages.projects.detail',compact('project','users','users_project_id'));
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
            $project = $this->projectService->updateProject($data, $id);
            DB::commit();
            $project->refresh();
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
            $this->projectService->deleteProject($id);
            DB::commit();
            return redirect()->back()->withStatus(trans('common.delete_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withErrors(trans('common.delete_failed'));
        }
    }

    public function permission($id)
    {
        try {
            $project = $this->projectService->getProject($id);
            $user_project = $project->users()->with('user')->get();
            return view('pages.projects.permission',compact('project','user_project'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->back()->withErrors(trans('common.error'));
        }
    }

    public function loadUserPermission($id)
    {
        try {
            $users = $this->projectService->getUserPermission($id);
            return response()->json($users);
        } catch (Throwable $e) {
            report($e);
            return response()->json(['message' => trans('common.error')],404);
        }
    }

    public function updatePermission(Request $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $data = $this->projectService->updatePermission($data, $id);
            DB::commit();
            $data->refresh();
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
            $data = $this->projectService->change($data, $id);
            DB::commit();
            return redirect()->back()->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->back()->withErrors(trans('common.update_failed'));
        }
    }
}
