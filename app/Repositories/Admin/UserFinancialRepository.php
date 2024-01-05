<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class UserFinancialRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\UserFinancial::class;
    }

    public function updateUserFinancial($userId, $dataRequest)
    {
        return $this->model->where('user_id', $userId)->update($dataRequest);
    }
}
