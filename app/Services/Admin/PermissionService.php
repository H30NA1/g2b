<?php

namespace App\Services\Admin;

use App\Repositories\Admin\PermissionRepository;
use App\Repositories\Admin\UserRoleRepository;
use Stevebauman\Location\Facades\Location;

class PermissionService
{
    protected $permissionRepository;
    protected $userRoleRepository;

    public function __construct(
        PermissionRepository $permissionRepository,
        UserRoleRepository $userRoleRepository
    ) {
        $this->permissionRepository = $permissionRepository;
        $this->userRoleRepository = $userRoleRepository;
    }

    public function getAllPermissions()
    {
        $data = [];
        $data['parents'] = $this->permissionRepository->all()->map(function($parent) {
            $parent->permission = json_decode($parent->permission, true);
            return $parent;
        })->toArray();
        $data['users'] = $this->userRoleRepository->all()->map(function($userRole) {
            $userRole->user = $userRole->user;
            $userRole->permission = json_decode($userRole->permission, true);
            return $userRole;
        })->toArray();

        return $data;
    }

    public function getParentPermissions($id = NULL)
    {
        if (isset($id)) {
            $role = $this->permissionRepository->find($id);

            if (!isset($permission)) {
                abort(404, 'Role Not Found');
            }

            return $role->map(function($parent) {
                $parent->permission = json_decode($parent->permission, true);
                return $parent;
            })->toArray();
        } else {
            return $this->permissionRepository->all()->map(function($parent) {
                $parent->permission = json_decode($parent->permission, true);
                return $parent;
            })->toArray();
        }
    }

    public function getUserPermissions($id = NULL)
    {
        if (isset($id)) {
            $userRole = $this->userRoleRepository->find($id);
            
            if (!isset($userRole)) {
                abort(404, 'user Role Not Found');
            }

            return $userRole->map(function($role) {
                $role->user = $role->user;
                $role->permission = json_decode($role->permission, true);
                return $role;
            })->toArray();
        } else {
            return $this->userRoleRepository->all()->map(function($role) {
                $role->user = $role->user;
                $role->permission = json_decode($role->permission, true);
                return $role;
            })->toArray();
        }
    }
}
