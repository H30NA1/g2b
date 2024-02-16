<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;

class AccessTokenRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\AccessToken::class;
    }

    public function retrieveUserToken($userId)
    {
        return $this->model->where('user_id', $userId)->first();
    }

    public function updateUserToken($userId, $dataRequest)
    {
        return $this->model->where('user_id', $userId)->update($dataRequest);
    }
}
