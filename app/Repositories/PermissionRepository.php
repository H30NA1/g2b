<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;

class PermissionRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\Permission::class;
    }

}
