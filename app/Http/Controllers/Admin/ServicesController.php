<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\StoreRequest;
use App\Http\Requests\Services\UpdateRequest;
use App\Services\Admin\ProjectService;
use App\Services\Admin\ServerService;
use App\Services\Admin\ServiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ServicesController extends Controller
{
    private $serviceService;
    private $projectService;
    private $serverService;

    public function __construct(
        ServiceService $serviceService,
        ProjectService $projectService,
        ServerService $serverService,
    ) {
        $this->serviceService = $serviceService;
        $this->projectService = $projectService;
        $this->serverService = $serverService;
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $services = $this->serviceService->getServices($data);
            return view('pages.core.services.index', compact('services'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function detail($id = NULL)
    {
        try {
            $service = null;
            $projects = null;
            $servers = null;
            if (isset($id)) {
                $service = $this->serviceService->getService($id);
                $projects = $this->projectService->getProjects(['action' => 'get']);
                $servers = $this->serverService->getServers(['action' => 'get']);
            }
            return view('pages.core.services.detail', compact('service', 'projects', 'servers'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.services.index')->withErrors($e->getMessage());
        }
    }

    public function store(StoreRequest $request)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $this->serviceService->createService($data);
            DB::commit();
            return redirect()->route('web.services.index')->withStatus(trans('common.create_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.services.index')->withErrors($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $this->serviceService->updateService($id, $data);
            DB::commit();
            return redirect()->route('web.services.detail', ['id' => $id])->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.services.index')->withErrors($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $this->serviceService->deleteService($id);
            DB::commit();
            return redirect()->route('web.services.index')->withStatus(trans('common.delete_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.services.index')->withErrors($e->getMessage());
        }
    }
}
