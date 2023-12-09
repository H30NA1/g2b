<?php

namespace App\Repositories\Api;

use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\User::class;
    }

}
