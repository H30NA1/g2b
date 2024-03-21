<?php

namespace App\Services\Admin;

use App\Models\Notification;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserService
{
    public function getUser($id)
    {
        $user = User::with(['userToken', 'professional', 'profile', 'settings'])->findOrFail($id);
        if (isset($user->professional->skills)) {
            $user->professional->skills = json_decode($user->professional->skills, true);
        }
        return $user;
    }

    public function getUsers($dataRequest)
    {
        $query = User::with(['userToken', 'professional', 'profile', 'settings']);

        if (isset($dataRequest['query'])) {
            $query->where(function ($q) use ($dataRequest) {
                $q->where('username', 'like', '%' . $dataRequest['query'] . '%')
                    ->orWhere('email', 'like', '%' . $dataRequest['query'] . '%');
            });
        }

        if (isset($dataRequest['roles'])) {
            $query->whereHas('settings', function ($q) use ($dataRequest) {
                $q->whereIn('role', $dataRequest['roles']);
            });
        }

        if (isset($dataRequest['statuses'])) {
            $query->whereHas('settings', function ($q) use ($dataRequest) {
                $q->whereIn('status', $dataRequest['statuses']);
            });
        }

        if (isset($dataRequest['is_blocked'])) {
            $query->whereHas('settings', function ($q) use ($dataRequest) {
                $q->where('is_blocked', $dataRequest['is_blocked']);
            });
        }

        $query = $query->orderByDesc('created_at');

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $query->get();
        } else {
            return $query->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    public function createUser($userData)
    {
        $plainPassword = isset($userData['password']) ? $userData['password'] : Str::random(10);
        $userData['plain_password'] = $plainPassword;
        $userData['password'] = Hash::make($plainPassword);
        $user = User::create([
            'username' => isset($userData['username']) ? $userData['username'] : strtolower($userData['first_name'] . $userData['last_name']),
            'email' => $userData['email'],
            'password' => $userData['password'],
            'plain_password' => $userData['plain_password'],
        ]);

        $this->prepareData($user, $userData);
        $user->professional()->create($userData['professional']);
        $user->profile()->create($userData['profile']);
        $user->settings()->create($userData['settings']);
        $user->role()->create([
            'user_id' => $user->id,
            'permission' => json_encode($this->preparePermission(getRoutes())),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Notification::create([
            'user_id' => Auth::user()->id,
            'title' => 'User ' . $user->username  . ' Creation Successfully',
            'content' => $user->username . ' was created by ' ,
            'url' => route('web.employees.detail', ['id' => $user->id])
        ]);

        return $user->load(['profile', 'professional', 'settings', 'role']);
    }

    public function updateUser($userId, $userData)
    {
        $password = [];
        if (isset($userData['password'])) {
            $password['plain_password'] = $userData['password'];
            $password['password'] = Hash::make($userData['password']);
        }
        $user = User::findOrFail($userId);

        $user->update([
            'username' => $userData['username'] ?? $user->username ?? null,
            'email' => $userData['email'] ?? $user->email ?? null,
            'password' => $password['password'] ?? $user->password ?? null,
            'plain_password' => $password['plain_password'] ?? $user->plain_password ?? null,
        ]);

        $this->prepareData($user, $userData);
        $user->professional()->update($userData['professional']);
        $user->profile()->update($userData['profile']);
        $user->settings()->update($userData['settings']);

        Notification::create([
            'user_id' => Auth::user()->id,
            'title' => 'Update User ' . $user->username  . ' Successfully',
            'content' => $user->username . ' was updated',
            'url' => route('web.employees.index')
        ]);
        
        return $user;
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Notification::create([
            'user_id' => Auth::user()->id,
            'title' => 'Delete User ' . $user->username  . ' Successfully',
            'content' => $user->username . ' was deleted',
            'url' => route('web.employees.index')
        ]);
        return true;
    }

    public function getProfile($id)
    {
        $user = User::findOrFail($id);
        $user = $user->load(['professional', 'profile', 'settings']);
        if (isset($user->professional->skills)) {
            $user->professional->skills = json_decode($user->professional->skills, true);
        }
        return $user;
    }

    public function getUserRoles($userId)
    {
        $role = UserRole::where('user_id', $userId)->latest()->first();
        $role['permission'] = $this->mappingRoles(json_decode($role['permission'], true));
        return $role;
    }

    public function updateUserRoles($userId, $roles)
    {
        $permission = [];

        foreach ($roles as $key => $method) {
            $name = ucwords(str_replace('.', ' ', $key));
            $permission[] = [
                'name' => $name,
                'route' => $key,
                'can_access' => 1,
                'method' => $method
            ];
        }

        UserRole::where('user_id', $userId)->latest()->update([
            'permission' => json_encode($permission)
        ]);
        
        Notification::create([
            'user_id' => $userId,
            'title' => 'Your Role Just been updated by admin',
            'content' => 'Your admin or leader just updated your permissions.' 
        ]);

        return true;
    }

    public function refreshUserRoles($userId)
    {
        $role = UserRole::where('user_id', $userId)->latest()->first();
        $userRoles = json_decode($role['permission'], true);

        $routes = getRoutes();
        $userRoles = $this->filterUserRoles($userRoles, $routes);

        UserRole::where('user_id', $userId)->latest()->update([
            'permission' => json_encode($userRoles)
        ]);

        Notification::create([
            'user_id' => $userId,
            'title' => 'Your Role Just been reset by admin',
            'content' => 'Your admin or leader just reset your permissions.' 
        ]);

        return true;
    }

    private function prepareData($user, &$userData)
    {
        $userId = $user->id;

        if (isset($userData['role'])) {
            if (!isset($user) && $userData['role'] == 'super_admin') {
                $userData['role'] = 'employee';
            } elseif (!isset($user) && !in_array($userData['role'], ['admin', 'employee', 'freelancer'])) {
                $userData['role'] = 'employee';
            } elseif (isset($user->settings) && $user->settings->role == 'super_admin' && $userData['role'] != 'super_admin') {
                $userData['role'] = 'super_admin';
            }
        }

        $data = [
            'professional' => [
                'user_id' => $userId,
                'working_experiences' => $userData['working_experiences'] ?? $user->professional->working_experiences ?? null,
                'specialty' => $userData['specialty'] ?? $user->professional->specialty ?? null,
                'skills' => isset($userData['skills']) ? json_encode($userData['skills'], true) : $user->professional->skills ?? null
            ],
            'profile' => [
                'user_id' => $userId,
                'birthday' => $userData['birthday'] ?? $user->profile->birthday ?? null,
                'sex' => $userData['sex'] ?? $user->profile->sex ?? 'male',
                'first_name' => $userData['first_name'] ?? $user->profile->first_name ?? null,
                'last_name' => $userData['last_name'] ?? $user->profile->last_name ?? null,
                'province_id' => $userData['province_id'] ?? $user->profile->province_id ?? null,
                'district_id' => $userData['district_id'] ?? $user->profile->district ?? null,
                'ward_id' => $userData['ward_id'] ?? $user->profile->ward ?? null,
                'post_code' => $userData['post_code'] ?? $user->profile->post_code ?? null,
                'address' => $userData['address'] ?? $user->profile->address ?? null,
                'tel' => $userData['tel'] ?? $user->profile->tel ?? null,
                'x_url' => $userData['x_url'] ?? $user->profile->x_url ?? null,
                'facebook_url' => $userData['facebook_url'] ?? $user->profile->facebook_url ?? null,
                'instagram_url' => $userData['instagram_url'] ?? $user->profile->instagram_url ?? null,
                'tiktok_url' => $userData['tiktok_url'] ?? $user->profile->tiktok_url ?? null,
                'youtube_url' => $userData['youtube_url'] ?? $user->profile->youtube_url ?? null,
                'description' => $userData['description'] ?? $user->profile->description ?? null,
            ],
            'settings' => [
                'user_id' => $userId,
                'role' => $userData['role'] ?? $user->settings->role ?? 'employee',
                'status' => $userData['status'] ?? $user->settings->status ?? 1,
                'is_blocked' => $userData['is_blocked'] ?? $user->settings->is_blocked ?? 0,
                'noti_email' => $userData['noti_email'] ?? $user->settings->noti_email ?? 1,
                'noti_device' => $userData['noti_device'] ?? $user->settings->noti_device ?? 1
            ]
        ];
        
        $this->uploadAvatarIfRequired($userData, $user, $data['professional'], 'company_logo');
        $this->processDate($userData['start_working_at'] ?? null, $data['professional'], 'start_working_at');
        $this->processDate($userData['end_working_at'] ?? null, $data['professional'], 'end_working_at');
        $this->uploadAvatarIfRequired($userData, $user, $data['profile'], 'avatar');
        $this->uploadAvatarIfRequired($userData, $user, $data['profile'], 'background_image');

        $userData = $data;
    }

    private function uploadAvatarIfRequired($userData, $user, &$data, $field)
    {
        if (isset($userData[$field])) {
            $path = 'user/' . $user->id . '/' . ($field === 'avatar' ? 'profile' : 'company');
            $data[$field] = uploadFunction($userData[$field], $path);
        }
    }

    private function processDate($date, &$data, $field)
    {
        if (isset($date)) {
            $data[$field] = isset($data[$field]) ? $data[$field] : formatDate($date, 'Y-m-d H:i:s');
        }
    }

    private function preparePermission($routes)
    {
        $permission = [];

        foreach ($routes as $route) {
            $name = ucwords(str_replace('.', ' ', $route));
            $permission[] = [
                'name' => $name,
                'route' => $route,
                'can_access' => 1,
                'method' => [
                    'GET' => 1,
                    'POST' => 1,
                    'PUT' => 1,
                    'DELETE' => 1,
                    'HEAD' => 1,
                    'OPTIONS' => 1,
                ]
            ];
        }

        return $permission;
    }

    private function mappingRoles($permissions)
    {
        $groupedRoutes = [];

        foreach ($permissions as $permission) {
            // Extract the last word from the route name
            $words = explode('.', $permission['route']);
            $lastWord = end($words);

            // Skip routes with no words
            if (empty($lastWord)) {
                continue;
            }

            // Group based on the last word in the route
            $groupLabel = ucfirst($lastWord) . ' Settings';

            // Create the group if it doesn't exist
            if (!isset($groupedRoutes[$groupLabel])) {
                $groupedRoutes[$groupLabel] = [
                    'label' => $groupLabel,
                    'routes' => [],
                ];
            }

            // Add the route to the corresponding group
            $groupedRoutes[$groupLabel]['routes'][] = $permission;
        }

        return array_values($groupedRoutes);
    }

    private function filterUserRoles($userRoles, $routesList)
    {
        foreach ($routesList as $route) {
            $name = ucwords(str_replace('.', ' ', $route));

            $existingRole = array_filter($userRoles, function ($role) use ($route) {
                return $role['route'] === $route;
            });

            if (empty($existingRole)) {
                $userRoles[] = [
                    'name' => $name,
                    'route' => $route,
                    'can_access' => 0,
                    'method' => [
                        'GET' => 0,
                        'POST' => 0,
                        'PUT' => 0,
                        'DELETE' => 0,
                        'HEAD' => 0,
                        'OPTIONS' => 0,
                    ]
                ];
            }
        }

        return $userRoles;
    }
}
