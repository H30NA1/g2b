<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class ProjectUserRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\ProjectUser::class;
    }

}
