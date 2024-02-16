<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;

class ProjectUserRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\ProjectUser::class;
    }

}
