<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use Illuminate\Http\Request;
use App\Services\Admin\UserService;
use App\Services\Admin\ProjectService;
use App\Services\Admin\TaskService;
use App\Services\Admin\UserRequestService;
use Throwable;

class DashboardController extends Controller
{
    private $userService;
    private $projectService;
    private $taskService;
    private $userRequestService;

    public function __construct(
        UserService $userService,
        ProjectService $projectService,
        TaskService $taskService,
        UserRequestService $userRequestService
    ) {
        $this->userService = $userService;
        $this->projectService = $projectService;
        $this->taskService = $taskService;
        $this->userRequestService = $userRequestService;
    }

    public function receiveSlackNotify(Request $request)
    {
        info(json_encode($request->all()));
        return response()->json(["message" => "OK", 'challenge' => 1]);
    }

    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $data['action'] = 'get';
            $employees = $this->userService->getUsers($data);
            // $projects = $this->projectService->getActiveProjects($data);
            // $tasks = $this->taskService->getUserActiveTasks($data, auth()->id());
            $projects = null;
            $tasks = null;
            
            return view('index', compact('employees', 'projects', 'tasks'));
        } catch (Throwable $e) {
            report($e);
            return redirect()->route('web.index')->withErrors($e->getMessage());
        }
    }

    public function getProvinces(Request $request)
    {
        $selectedProvince = $request->get('selectedProvince');
        $provinces = collect(Province::all())->map(function($province) use($selectedProvince) {
            return [
                'id' => $province->code,
                'name' => $province->name,
                'selected' => $province->code == $selectedProvince ? true : false
            ];
        })->toArray();
   
        return $provinces;
    }

    public function getDistricts(Request $request, $provinceCode)
    {
        $districts = collect(District::where('province_code', $provinceCode)->get())->map(function($district) {
            return [
                'id' => $district->code,
                'name' => $district->name
            ];
        })->toArray();
        
        return array_values($districts);
    }

    public function getWards(Request $request, $districtCode)
    {
        $wards = collect(Ward::where('district_code', $districtCode)->get())->map(function($ward) {
            return [
                'id' => $ward->code,
                'name' => $ward->name
            ];
        })->toArray();

        return array_values($wards);
    }
}