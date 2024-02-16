<?php

namespace App\Services;

use App\Models\Service;
use App\Models\ServiceAccount;
use App\Models\ServiceAssociate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceService
{
    public function getService($id)
    {
        $service = Service::with(['associates'])->findOrFail($id);

        return $service;
    }

    public function getServices($dataRequest)
    {
        $query = Service::with(['associates']);

        $query = $query->orderByDesc('created_at');

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $query->get();
        } else {
            return $query->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    public function getServiceAccounts($dataRequest)
    {
        $query = ServiceAccount::with(['service']);

        $query = $query->orderByDesc('created_at');

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $query->get();
        } else {
            return $query->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

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

        return $service;
    }

    public function updateServiceProjects($id, $dataRequest)
    {
        $service = Service::findOrFail($id);
        $service->projects()->delete();
        $projectData = [];
        // Prepare an array with project data for bulk insert/update
        foreach ($dataRequest['projects'] as $projectId) {
            $projectData[] = [
                'service_id' => $id,
                'associate_id' => $projectId,
                'type' => 'project',
                'username' => $dataRequest['auth'][$projectId]['username'],
                'password' => Hash::make($dataRequest['auth'][$projectId]['password']),
                'plain_password' => $dataRequest['auth'][$projectId]['password']
            ];
        }
        // Use updateOrInsert for bulk insert/update
        ServiceAssociate::upsert($projectData, ['service_id', 'associate_id'], ['type']);

        // Refresh the service model to get the updated relationships
        $service->refresh();

        return $service;
    }

    public function updateServiceAccounts($id, $dataRequest)
    {
        $serviceAccount = ServiceAccount::findOrFail($id);

        $accountData = [];
        // Prepare an array with project data for bulk insert/update
            $accountData[] = [
                'service_id' => $id,
                'username' => $dataRequest['username'],
                'password' => Hash::make($dataRequest['password']),
                'plain_password' => $dataRequest['password']
            ];
        // Use updateOrInsert for bulk insert/update
        $serviceAccount->update($accountData);

        return $serviceAccount;
    }

    public function updateServiceServers($id, $dataRequest)
    {
        $service = Service::findOrFail($id);
        $service->servers()->delete();
        $serverData = [];
        // Prepare an array with project data for bulk insert/update
        foreach ($dataRequest['servers'] as $serverId) {
            $serverData[] = [
                'service_id' => $id,
                'associate_id' => $serverId,
                'type' => 'server',
                'username' => $dataRequest['auth'][$serverId]['username'],
                'password' => Hash::make($dataRequest['auth'][$serverId]['password']),
                'plain_password' => $dataRequest['auth'][$serverId]['password']
            ];
        }
        // Use updateOrInsert for bulk insert/update
        ServiceAssociate::upsert($serverData, ['service_id', 'associate_id'], ['type']);

        // Refresh the service model to get the updated relationships
        $service->refresh();

        return $service;
    }

    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return true;
    }

    public function deleteServiceAccount($id)
    {
        $serviceAccount = ServiceAccount::findOrFail($id);
        $serviceAccount->delete();

        return true;
    }
}
