<?php

namespace App\Services;

use App\Models\Server;
use App\Models\ServerProject;
use App\Models\ServiceAssociate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServerService
{
    public function getServer($id)
    {
        $server = Server::with(['associateService'])->findOrFail($id);

        return $server;
    }

    public function getServers($dataRequest)
    {
        $query = Server::with(['associateService']);

        $query = $query->orderByDesc('created_at');

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $query->get();
        } else {
            return $query->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    public function createServer($dataRequest)
    {
        $password = [];
        if (isset($dataRequest['password'])) {
            $password['plain_password'] = $dataRequest['password'];
            $password['password'] = Hash::make($dataRequest['password']);
        }

        $server = Server::create([
            'name' => $dataRequest['name'],
            'host' => $dataRequest['host'],
            'port' => $dataRequest['port'],
            'is_active' => $dataRequest['is_active']
        ]);

        ServiceAssociate::create([
            'associate_id'  => $server->id,
            'type'          => 'server',
            'service_id' => $dataRequest['service_id'],
            'username'      => $dataRequest['username'],
        ] + $password);

        return $server;
    }

    public function updateServer($id, $dataRequest)
    {
        $password = [];
        if (isset($dataRequest['password'])) {
            $password['plain_password'] = $dataRequest['password'];
            $password['password'] = Hash::make($dataRequest['password']);
        }

        $server = Server::findOrFail($id);

        $server->update([
            'name' => $dataRequest['name'],
            'host' => $dataRequest['host'],
            'port' => $dataRequest['port'],
            'is_active' => $dataRequest['is_active']
        ]);

        if (isset($server->associateService)) {
            $server->associateService->update([
                'associate_id'  => $server->id,
                'type'          => 'server',
                'service_id' => $dataRequest['service_id'],
                'username'      => $dataRequest['username'],
            ] + $password);
        } else {
            ServiceAssociate::create([
                'associate_id'  => $server->id,
                'type'          => 'server',
                'service_id' => $dataRequest['service_id'],
                'username'      => $dataRequest['username'],
            ] + $password);
        }

        return $server;
    }

    public function deleteServer($id)
    {
        $server = Server::findOrFail($id);
        $server->delete();

        return true;
    }

    public function updateServerProject($dataRequest, $id)
    {
        $server = Server::findOrFail($id);
        $server->projects()->delete();
        $projectData = [];
        // Prepare an array with project data for bulk insert/update
        foreach ($dataRequest['projects'] as $projectId) {
            $priKey = null;
            if (isset($dataRequest['auth'][$projectId]['prikey'])) {
                $path = 'server/projects/' . $projectId . '/ppk';
                $priKey = uploadFunction($dataRequest['auth'][$projectId]['prikey'], $path);
            }
            $projectData[] = [
                'server_id' => $id,
                'project_id' => $projectId,
                'status' => $dataRequest['auth'][$projectId]['status'],
                'username' => $dataRequest['auth'][$projectId]['username'],
                'password' => Hash::make($dataRequest['auth'][$projectId]['password']),
                'plain_password' => $dataRequest['auth'][$projectId]['password'],
                'prikey' => $priKey
            ];
        }
        // dd($projectData);
        ServerProject::upsert($projectData, ['server_id', 'project_id']);
        return $server;
    }
}
