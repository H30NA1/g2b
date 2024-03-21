<?php

namespace App\Services\Admin;

use App\Models\Permission;
use App\Models\UserRole;

class PermissionService
{
    public function __construct()
    {
    }

    public function getPermissions()
    {
        $permissions = Permission::where('role', '!=', 'super_admin')->get();
        return $permissions;
    }

    public function getPermission($id)
    {
        $permission = Permission::findOrFail($id);
        $permission['permission'] = $this->mappingRoles(json_decode($permission['permission'], true));
        return $permission;
    }

    public function updatePermissions($id, $roles)
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

        Permission::where('id', $id)->latest()->update([
            'permission' => json_encode($permission)
        ]);

        return true;
    }

    public function refreshPermissions($id, $option = NULL)
    {
        $permission = Permission::findOrFail($id);
        $permissions = json_decode($permission['permission'], true);

        $routes = getRoutes();
        
        if (isset($option['action']) && $option['action'] == 'reset') {
            $permissions = $this->preparePermission($routes, $permission->role);
        } else {
            $permissions = $this->filterPermission($permissions, $routes);
        }

        $permission->update([
            'permission' => $permissions
        ]);
        return true;
    }

    public function deletePermission($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return true;
    }

    private function preparePermission($routes, $role)
    {
        $permission = [];
        $extra = [];
        if ($role == 'admin')
        {
            $extra = [
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
        } else {
            $extra = [
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
        
        foreach ($routes as $route)
        {
            $name = ucwords(str_replace('.', ' ', $route));
            $permission[] = [
                'name' => $name,
                'route' => $route,
            ] + $extra;
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

    private function filterPermission($permissions, $routesList)
    {
        foreach ($routesList as $route) {
            $name = ucwords(str_replace('.', ' ', $route));

            $existingRole = array_filter($permissions, function ($role) use ($route) {
                return $role['route'] === $route;
            });

            if (empty($existingRole)) {
                $permissions[] = [
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
        }

        return $permissions;
    }
}
