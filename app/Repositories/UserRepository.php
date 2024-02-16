<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function model()
    {
        return \App\Models\User::class;
    }

    public function getUser($id)
    {
        $user = $this->model->find($id);

        if (!isset($user)) {
            return abort('404', 'User Not Found');
        }

        return $user->load(['userToken', 'professional', 'profile', 'settings']);
    }

    public function getUsers($dataRequest)
    {
        $model = $this->model->with(['userToken', 'professional', 'profile', 'settings']);

        if (isset($dataRequest['query'])) {
            $query = $dataRequest['query'];
            $model = $model->where('username', 'like', '%' . $query . '%')
                ->where('email', 'like', '%' . $query . '%');
        }

        if (isset($dataRequest['roles'])) {
            $roles = $dataRequest['roles'];
            $model = $model->whereHas('settings', function ($q) use ($roles) {
                $q->whereIn('role', $roles);
            });
        }

        if (isset($dataRequest['statuses'])) {
            $statuses = $dataRequest['roles'];
            $model = $model->whereHas('settings', function ($q) use ($statuses) {
                $q->whereIn('status', $statuses);
            });
        }

        if (isset($dataRequest['is_blocked'])) {
            $blocked = $dataRequest['is_blocked'];
            $model = $model->whereHas('settings', function ($q) use ($blocked) {
                $q->where('is_blocked', $blocked);
            });
        }

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $model->get();
        } else {
            return $model->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    public function deleteUser($id)
    {
        $user = $this->model->find($id);

        if (!isset($user)) {
            return abort('404', 'User Not Found');
        }

        return $user->delete();
    }

    public function getUsersWithoutCurrentLogin()
    {
        return $this->model::query()->latest('created_at')->get()->except(auth()->id());
    }
}
