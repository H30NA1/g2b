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
        $model = Project::with(['users', 'tasks']);

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $model->get();
        } else {
            return $model->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    public function getProject($id)
    {
        return Project::findOrFail($id);
    }

    public function createProject($dataRequest)
    {
        return Project::create($dataRequest);
    }

    public function updateProject($dataRequest, $id)
    {
        $project = Project::findOrFail($id);
        return $project->update($dataRequest);
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        return $project->delete();
    }
}