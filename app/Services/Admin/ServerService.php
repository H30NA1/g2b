<?php

namespace App\Services\Admin;

use App\Models\Server;
use App\Models\ServerProject;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServerService
{
    public function getServer($id)
    {
        $server = Server::findOrFail($id);

        return $server;
    }

    public function getServers($dataRequest)
    {
        $query = Server::orderByDesc('created_at');

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
            'hostname' => $dataRequest['hostname'],
            'port' => $dataRequest['port'],
            'is_active' => $dataRequest['is_active']
        ]);

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
            'hostname' => $dataRequest['hostname'],
            'port' => $dataRequest['port'],
            'is_active' => $dataRequest['is_active']
        ]);

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
                'status' => isset($dataRequest['auth'][$projectId]['status']) ? $dataRequest['auth'][$projectId]['status'] : 'null',
                'username' => $dataRequest['auth'][$projectId]['username'],
                'password' => Hash::make($dataRequest['auth'][$projectId]['password']),
            ];
        }

        // dd($projectData);
        ServerProject::upsert($projectData, ['server_id', 'project_id']);

        return $server;
    }

    public function deleteServer($id)
    {
        $server = Server::findOrFail($id);
        $server->delete();

        return true;
    }
}
