<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;

class UserTaskRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\UserTask::class;
    }
}
