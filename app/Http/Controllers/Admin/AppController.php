<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\AppService;
use App\Services\Admin\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class AppController extends Controller
{
    private $appService;
    private $projectService;
    public function __construct(
        AppService $appService,
        ProjectService $projectService,
    ) {
        $this->appService = $appService;
        $this->projectService = $projectService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $apps = $this->appService->getByOptions($data);
            $projects = $this->projectService->getProjects(['action' => 'get']);
            return view('pages.apps.index', compact('apps', 'projects'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }


    public function previous($id)
    {
        try {
            $app = $this->appService->getApp($id);
            return view('pages.apps.previous', compact('app'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.apps.index')->withErrors($e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            DB::commit();
            return redirect()->route('web.servers.index')->withStatus(trans('common.create_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.servers.index')->withErrors($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            DB::commit();
            return redirect()->route('web.servers.detail', ['id' => $id])->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.servers.index')->withErrors($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            DB::commit();
            return redirect()->route('web.servers.index')->withStatus(trans('common.delete_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.servers.index')->withErrors($e->getMessage());
        }
    }
}
