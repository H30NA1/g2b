<?php

namespace App\Services\Admin;

use App\Repositories\Admin\TaskRepository;
use App\Repositories\Admin\UserTaskRepository;

class TaskService
{
    protected $taskRepository;
    protected $userTaskRepository;

    public function __construct(
        TaskRepository $taskRepository,
        UserTaskRepository $userTaskRepository,
    ) {
        $this->taskRepository = $taskRepository;
        $this->userTaskRepository = $userTaskRepository;
    }

    public function getTasks($dataRequest)
    {
        return $this->taskRepository->getTasks($dataRequest);
    }

    public function getTask($id)
    {
        return $this->taskRepository->getTask($id);
    }

    public function createTask($dataRequest)
    {
        return $this->taskRepository->create($dataRequest);
    }

    public function updateTask($dataRequest, $id)
    {
        return $this->taskRepository->update($dataRequest, $id);
    }

    public function deleteTask($id)
    {
        return $this->taskRepository->deleteTask($id);
    }
}
