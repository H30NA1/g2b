<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class ProjectRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\Project::class;
    }

}
