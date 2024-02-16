<?php

namespace App\Services;

use App\Models\Project;

class ProjectService
{
    public function __construct()
    {
    }

    public function getProjects($dataRequest)
    {
        $model = Project::with(['users.user.profile', 'tasks'])->latest('created_at');


        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $model->get();
        } else {
            return $model->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    public function getActiveProjects($dataRequest = [])
    {
        $model = Project::with(['users', 'tasks']);

        $model = $model->whereHas('setting', function($q) {
            return $q->whereIn('status', ['open', 'progressing', 'confirming']);
        });

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $model->get();
        } else {
            return $model->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    public function getProject($id)
    {
        return Project::with('users')->findOrFail($id);
    }

    public function createProject($dataRequest)
    {
        $project = Project::create($dataRequest);
        if($project){
            foreach ($dataRequest['assigned_id'] as $item) {
                $project->users()->create([
                    'user_id' => (int)$item,
                    'permission' => $dataRequest['assigned_permission']
                ]);
            }

        }
        return $project;
    }

    public function updateProject($dataRequest, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($dataRequest);
//        $project->users()->update([
//            'user_id' => $dataRequest['assigned_id'],
//            'permission' => $dataRequest['assigned_permission']
//        ]);
        return $project;
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->users()->delete();
        $project->tasks()->delete();
        $project->information()->delete();
        $project->setting()->delete();
        $project->delete();
    }

    public function updatePermission($dataRequest, $id)
    {
        $project = Project::findOrFail($id);
        $selected_user = $project->users()->where('user_id',$dataRequest['user_id'])->first();

        if($selected_user){
            $selected_user->permission = $dataRequest['selected_value'];
            $selected_user->save();
        }

        return $project;
    }

    public function change($dataRequest, $id)
    {
        $project = Project::findOrFail($id);
        return $project->update($dataRequest);
    }

    public function getUserPermission($id)
    {
        $project = Project::with('users.user')->findOrFail($id);
        return $project->users;
    }
}
