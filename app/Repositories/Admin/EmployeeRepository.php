<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class EmployeeRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\Employee::class;
    }

}
