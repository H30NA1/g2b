<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;

class UserProfileRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\UserProfile::class;
    }

    public function updateUserProfile($userId, $dataRequest)
    {
        return $this->model->where('user_id', $userId)->update($dataRequest);
    }
}
