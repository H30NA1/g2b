<?php

namespace App\Repositories\Api;

use App\Repositories\BaseRepository;

class UserSettingsRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\UserSettings::class;
    }

    public function updateUserSettings($userId, $dataRequest)
    {
        return $this->model->where('user_id', $userId)->update($dataRequest);
    }
}
