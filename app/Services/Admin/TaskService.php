<?php

namespace App\Services\Admin;

use App\Models\Task;
use App\Models\UserTask;

class TaskService
{


    public function __construct() {

    }

    public function getTasks($dataRequest)
    {
        $tasks = Task::with(['project','tasks.user'])->latest('created_at')->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        return $tasks;
    }

    public function getUserActiveTasks($dataRequest, $userId)
    {
        $model = UserTask::with(['task'])->where('user_id', $userId)->whereIn('progress', ['processing', 'waiting', 'pending', 'confirmation', 'open']);

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $model->get();
        } 

        return $model->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
    }

    public function getTask($id)
    {
        return Task::with('tasks.user')->findOrFail($id);
    }

    public function createTask($dataRequest)
    {
        $task = Task::create($dataRequest);
        if($task){
            $task->tasks()->create([
                'lead_id' => auth()->id(),
                'user_id' => $dataRequest['assigned_id'],
                'progress' => 'waiting'
            ]);
        }
        return $task;
    }

    public function updateTask($dataRequest, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($dataRequest);
        $task->tasks()->update([
            'user_id' => $dataRequest['assigned_id']
        ]);
        return $task;
    }

    public function change($dataRequest, $id)
    {
        $task = Task::findOrFail($id);
        return $task->update($dataRequest);
    }

    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return true;
    }
}
