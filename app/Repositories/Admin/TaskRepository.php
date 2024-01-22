<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class TaskRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\Task::class;
    }

    public function getTasks($dataRequest)
    {
        $model = $this->model->with(['project']);

        return $model->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
    }

    public function getTask($id)
    {
        return $this->model->find($id);
    }

    public function deleteTask($id)
    {
        $task = $this->model->find($id);

        if (!isset($task)) {
            return abort('404', 'Task Not Found');
        }

        return $task->delete();
    }
}
