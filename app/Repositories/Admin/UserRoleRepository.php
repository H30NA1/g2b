<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class UserRoleRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\UserRole::class;
    }
}
