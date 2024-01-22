<?php

namespace App\Services\Admin;

use App\Repositories\Admin\UserRepository;
use App\Repositories\Admin\UserProfessionalRepository;
use App\Repositories\Admin\UserProfileRepository;
use App\Repositories\Admin\UserSettingsRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;
    protected $userProfessionalRepository;
    protected $userProfileRepository;
    protected $userSettingRepository;

    public function __construct(
        UserRepository $userRepository,
        UserProfessionalRepository $userProfessionalRepository,
        UserProfileRepository $userProfileRepository,
        UserSettingsRepository $userSettingRepository
    ) {
        $this->userRepository = $userRepository;
        $this->userProfessionalRepository = $userProfessionalRepository;
        $this->userProfileRepository = $userProfileRepository;
        $this->userSettingRepository = $userSettingRepository;
    }

    public function getUser($id)
    {
        $model = $this->userRepository->getUser($id);
        return $model;
    }

    public function getUsers($dataRequest)
    {
        $model = $this->userRepository->getUsers($dataRequest);
        return $model;
    }

    public function createUser($userData)
    {
        $plainPassword = $userData['password'];
        $userData['plain_password'] = $plainPassword;
        $userData['password'] = Hash::make($userData['password']);
        $user = $this->userRepository->create([
            'username' => $userData['username'],
            'email' => $userData['email'],
            'password' => $userData['password'],
            'plain_password' => $userData['plain_password'],
        ]);

        $this->prepareData($user, $userData);
        $this->userProfessionalRepository->create($userData['professional']);
        $this->userProfileRepository->create($userData['profile']);
        $this->userSettingRepository->create($userData['settings']);

        return $user->load(['profile', 'professional', 'settings']);
    }

    public function updateUser($userId, $userData)
    {
        $password = [];
        $plainPassword = $userData['password'];
        
        if (isset($plainPassword)) {
            $password['plain_password'] = $plainPassword;
            $password['password'] = Hash::make($plainPassword);
        }

        $user = $this->userRepository->update([
            'username' => $userData['username'],
            'email' => $userData['email'],
            'password' => $password['password'],
            'plain_password' => $password['plain_password'],
        ], $userId);

        $this->prepareData($user, $userData);
        $this->userProfessionalRepository->updateUserProfessional($user->id, $userData['professional']);
        $this->userProfileRepository->updateUserProfile($user->id, $userData['profile']);
        $this->userSettingRepository->updateUserSettings($user->id, $userData['settings']);

        return $user;
    }

    public function deleteUser($id)
    {
        return $this->userRepository->deleteUser($id);
    }

    private function prepareData($user, &$userData)
    {
        $userId = $user->id;
        // dd($userData);
        $data = [
            'professional' => [
                'user_id' => $userId,
                'working_experiences' => $userData['working_experiences'] ?? $user->professional->working_experiences ?? null,
                'job_title' => $userData['job_title'] ?? $user->professional->job_title ?? null,
                'company_address' => $userData['company_address'] ?? $user->professional->company_address ?? null,
                'company_tel' => $userData['company_tel'] ?? $user->professional->company_tel ?? null,
            ],
            'profile' => [
                'user_id' => $userId,
                'birthday' => $userData['birthday'] ?? $user->profile->birthday ?? null,
                'sex' => $userData['sex'] ?? $user->profile->sex ?? 'male',
                'first_name' => $userData['first_name'] ?? $user->profile->first_name ?? null,
                'last_name' => $userData['last_name'] ?? $user->profile->last_name ?? null,
                'nationality' => $userData['nationality'] ?? $user->profile->nationality ?? null,
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
}
