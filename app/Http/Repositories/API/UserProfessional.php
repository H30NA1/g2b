<?php

namespace App\Repositories\Api;

use App\Repositories\BaseRepository;

class UserProfessional extends BaseRepository
{
    public function model()
    {
        return \App\Models\UserProfessional::class;
    }

    public function updateUserProfessional($userId, $dataRequest)
    {
        return $this->model->where('user_id', $userId)->update($dataRequest);
    }
}
