<?php

namespace App\Services\Admin;

use App\Models\Service;
use App\Models\ServiceAccount;
use App\Models\ServiceProject;
use App\Models\ServiceServer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceService
{
    public function getService($id)
    {
        $service = Service::findOrFail($id);

        return $service;
    }

    public function getServices($dataRequest)
    {
        $query = Service::orderByDesc('created_at');

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $query->get();
        } else {
            return $query->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    // public function getServiceAccounts($dataRequest)
    // {
    //     $query = ServiceAccount::with(['service']);

    //     $query = $query->orderByDesc('created_at');

    //     if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
    //         return $query->get();
    //     } else {
    //         return $query->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
    //     }
    // }

    public function createService($dataRequest)
    {
        $path = 'service';
        $service = Service::create([
            'logo' => isset($dataRequest['logo']) ? uploadFunction($dataRequest['logo'], $path) : null,
            'name' => $dataRequest['name'],
            'description' => $dataRequest['description'],

        ]);
        return true;
    }

    public function updateService($id, $dataRequest)
    {
        $service = Service::findOrFail($id);
        $path = 'service';
        $service->update([
            'logo' => isset($dataRequest['logo']) ? uploadFunction($dataRequest['logo'], $path) : $service->logo,
            'name' => $dataRequest['name'],
            'description' => $dataRequest['description']
        ]);
        if (isset($dataRequest['servers'])) {
            $service->servers()->delete();
            $serverData = [];
    
            // Prepare an array with project data for bulk insert/update
            foreach ($dataRequest['servers'] as $serverId) {
                $priKey = null;
                if (isset($dataRequest['auth'][$serverId]['prikey'])) {
                    $path = 'service/servers/' . $serverId . '/ppk';
                    $priKey = uploadFunction($dataRequest['auth'][$serverId]['prikey'], $path);
                }
                $serverData[] = [
                    'service_id' => $id,
                    'server_id' => $serverId,
                    'status' => isset($dataRequest['auth'][$serverId]['status']) ? $dataRequest['auth'][$serverId]['status'] : 'inactive',
                    'username' => $dataRequest['auth'][$serverId]['username'],
                    'password' => Hash::make($dataRequest['auth'][$serverId]['password']),
                ];
            }
    
            ServiceServer::upsert($serverData, ['service_id', 'server_id']);
        }
        
        if (isset($dataRequest['projects'])) {
            $service->projects()->delete();
            $projectData = [];
    
            // Prepare an array with project data for bulk insert/update
            foreach ($dataRequest['projects'] as $projectId) {
                $priKey = null;
                if (isset($dataRequest['auth'][$projectId]['prikey'])) {
                    $path = 'service/projects/' . $projectId . '/ppk';
                    $priKey = uploadFunction($dataRequest['auth'][$projectId]['prikey'], $path);
                }
                $projectData[] = [
                    'service_id' => $id,
                    'project_id' => $projectId,
                    'status' => isset($dataRequest['auth'][$projectId]['status']) ? $dataRequest['auth'][$projectId]['status'] : 'inactive',
                    'username' => $dataRequest['auth'][$projectId]['username'],
                    'password' => Hash::make($dataRequest['auth'][$projectId]['password']),
                ];
            }
    
            ServiceProject::upsert($projectData, ['service_id', 'project_id']);
        }

        return $service;
    }

    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return true;
    }
}
