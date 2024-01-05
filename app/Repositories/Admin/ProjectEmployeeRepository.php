<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class ProjectEmployeeRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\ProjectEmployee::class;
    }

}
