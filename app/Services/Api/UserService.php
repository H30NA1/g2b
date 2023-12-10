<?php

namespace App\Services\Api;

use App\Repositories\Api\UserRepository;
use App\Repositories\Api\UserFinancialRepository;
use App\Repositories\Api\UserProfessionalRepository;
use App\Repositories\Api\UserProfileRepository;
use App\Repositories\Api\UserSettingsRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;
    protected $userFinancialRepository;
    protected $userProfessionalRepository;
    protected $userProfileRepository;
    protected $userSettingRepository;

    public function __construct(
        UserRepository $userRepository,
        UserFinancialRepository $userFinancialRepository,
        UserProfessionalRepository $userProfessionalRepository,
        UserProfileRepository $userProfileRepository,
        UserSettingsRepository $userSettingRepository
    ) {
        $this->userRepository = $userRepository;
        $this->userFinancialRepository = $userFinancialRepository;
        $this->userProfessionalRepository = $userProfessionalRepository;
        $this->userProfileRepository = $userProfileRepository;
        $this->userSettingRepository = $userSettingRepository;
    }

    public function createUser($userData)
    {
        $plainPassword = $userData['password'];
        $userData['plain_password'] = $plainPassword;
        $userData['password'] = Hash::make($userData['password']);
        $user = $this->userRepository->create($userData);

        $this->prepareData($user, $userData);
        $this->userFinancialRepository->create($userData['financial']);
        $this->userProfessionalRepository->create($userData['profile']);
        $this->userProfileRepository->create($userData['professional']);
        $this->userSettingRepository->create($userData['settings']);

        return $user;
    }

    public function updateUser($userId, $userData)
    {
        $plainPassword = $userData['password'];
        $userData['plain_password'] = $plainPassword;
        $userData['password'] = Hash::make($plainPassword);

        $user = $this->userRepository->update($userId, $userData);
        $this->prepareData($user, $userData);
        $this->userFinancialRepository->updateUserFinancial($user->id, $userData['financial']);
        $this->userProfessionalRepository->updateUserProfessional($user->id, $userData['profile']);
        $this->userProfileRepository->updateUserProfile($user->id, $userData['profession']);
        $this->userSettingRepository->updateUserSettings($user->id, $userData['settings']);

        return $user;
    }

    public function prepareData($user, &$userData)
    {
        $userId = $user->id;

        $userData = [
            'financial' => [
                'user_id' => $userId,
                'salary' => $userData['salary'] ?? $user->financial->salary ?? null,
                'bank_name' => $userData['bank_name'] ?? $user->financial->bank_name ?? null,
                'account_number' => $userData['account_number'] ?? $user->financial->account_number ?? null,
                'routing_number' => $userData['routing_number'] ?? $user->financial->routing_number ?? null,
                'currency' => $userData['currency'] ?? $user->financial->currency ?? null,
            ],
            'professional' => [
                'user_id' => $userId,
                'working_experiences' => $userData['working_experiences'] ?? $user->professional->working_experiences ?? null,
                'job_title' => $userData['job_title'] ?? $user->professional->job_title ?? null,
                'company_name' => $userData['company_name'] ?? $user->professional->company_name ?? null,
                'company_tax_number' => $userData['company_tax_number'] ?? $user->professional->company_tax_number ?? null,
                'company_url' => $userData['company_url'] ?? $user->professional->company_url ?? null,
                'company_address' => $userData['company_address'] ?? $user->professional->company_address ?? null,
                'company_tel' => $userData['company_tel'] ?? $user->professional->company_tel ?? null,
            ],
            'profile' => [
                'user_id' => $userId,
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
                'role' => $userData['role'] ?? $user->settings->role ?? 'customer',
                'status' => $userData['status'] ?? $user->settings->status ?? 'active',
                'plain_password' => $userData['plain_password'] ?? $user->settings->plain_password ?? null,
                'is_blocked' => $userData['is_blocked'] ?? $user->settings->is_blocked ?? 0,
                'noti_email' => $userData['noti_email'] ?? $user->settings->noti_email ?? 1,
                'noti_device' => $userData['noti_device'] ?? $user->settings->noti_device ?? 1
            ]
        ];

        $this->uploadAvatarIfRequired($userData, $user, $userData['professional'], 'company_logo');
        $this->processDate($userData['start_working_at'] ?? null, $userData['professional'], 'start_working_at');
        $this->processDate($userData['end_working_at'] ?? null, $userData['professional'], 'end_working_at');
        $this->uploadAvatarIfRequired($userData, $user, $userData['profile'], 'avatar');
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
