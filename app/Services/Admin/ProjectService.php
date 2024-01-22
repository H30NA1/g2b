<?php

namespace App\Services\Admin;

use App\Repositories\Admin\ProjectRepository;
use App\Repositories\Admin\ProjectUserRepository;

class ProjectService
{
    protected $projectRepository;
    protected $projectUserRepository;

    public function __construct(
        ProjectRepository $projectRepository,
        ProjectUserRepository $projectUserRepository,
    ) {
        $this->projectRepository = $projectRepository;
        $this->projectUserRepository = $projectUserRepository;
    }

    public function getProjects($dataRequest)
    {
        return $this->projectRepository->getProjects($dataRequest);
    }

    public function getProject($id)
    {
        return $this->projectRepository->getProject($id);
    }

    public function createProject($dataRequest)
    {
        return $this->projectRepository->create($dataRequest);
    }

    public function updateProject($dataRequest, $id)
    {
        return $this->projectRepository->update($dataRequest, $id);
    }

    public function deleteProject($id)
    {
        return $this->projectRepository->deleteProject($id);
    }
}
