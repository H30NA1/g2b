<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Servers\StoreRequest;
use App\Http\Requests\Servers\UpdateRequest;
use App\Services\Admin\ProjectService;
use App\Services\Admin\ServiceService;
use App\Services\Admin\ServerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ServersController extends Controller
{
    private $serverService;
    private $serviceService;
    private $projectService;

    public function __construct(
        ServerService $serverService,
        ServiceService $serviceService,
        ProjectService $projectService,
    ) {
        $this->serverService = $serverService;
        $this->serviceService = $serviceService;
        $this->projectService = $projectService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $servers = $this->serverService->getServers($data);
            return view('pages.core.servers.index', compact('servers'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function detail($id = NULL)
    {
        try {
            $server = null;
            $services = $this->serviceService->getServices(['action' => 'get']);
            $projects = $this->projectService->getProjects(['action' => 'get']);
            if (isset($id)) {
                $server = $this->serverService->getServer($id);
            }
            return view('pages.core.servers.detail',compact('server', 'services', 'projects'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.servers.index')->withErrors($e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $this->serverService->createServer($data);
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
            $this->serverService->updateServer($id, $data);
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
            $this->serverService->deleteServer($id);
            DB::commit();
            return redirect()->route('web.servers.index')->withStatus(trans('common.delete_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.servers.index')->withErrors($e->getMessage());
        }
    }
}
