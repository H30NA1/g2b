<?php

namespace App\Policies\Admin;

use App\Models\User;
use App\Services\Admin\StripeService;
use Illuminate\Auth\Access\HandlesAuthorization;
use Throwable;

class UserPolicy
{
    use HandlesAuthorization;

    public function isSuperAdmin(User $user)
    {
        if ($user->settings->role != 'super_admin') {
            return $this->deny('You are not authorized to perform this process.');
        }

        return true;
    }

    public function isAdmin(User $user)
    {
        if (!isset($user->settings)) {
            return $this->deny('Unable to find settings for this account! Please contact your supervisor');
        }

        if (!in_array($user->settings->role, ['super_admin', 'admin'])) {
            return $this->deny('You are not authorized to perform this process.');
        }

        return true;
    }

    public function isEmployee(User $user)
    {
        if (!isset($user->settings)) {
            return $this->deny('Unable to find settings for this account! Please contact your supervisor');
        }

        if (!in_array($user->settings->role, ['super_admin', 'admin', 'employee'])) {
            return $this->deny('You are not authorized to perform this process.');
        }

        return true;
    }

    public function isFreelancer(User $user)
    {
        if (!isset($user->settings)) {
            return $this->deny('Unable to find settings for this account! Please contact your supervisor');
        }

        if (!in_array($user->settings->role, ['super_admin', 'admin', 'freelancer'])) {
            return $this->deny('You are not authorized to perform this process.');
        }

        return true;
    }
}
