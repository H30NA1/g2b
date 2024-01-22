<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class UserTaskRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\UserTask::class;
    }
}
