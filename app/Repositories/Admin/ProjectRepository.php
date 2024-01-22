<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class ProjectRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\Project::class;
    }

    public function getProjects($dataRequest)
    {
        $model = $this->model->with(['users', 'tasks']);

        return $model->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
    }

    public function getProject($id)
    {
        return $this->model->find($id);
    }

    public function deleteProject($id)
    {
        $project = $this->model->find($id);

        if (!isset($project)) {
            return abort('404', 'Project Not Found');
        }

        return $project->delete();
    }
}
