<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use Illuminate\Database\Seeder;


class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::insert(
            [
                [
                    'role' => 'super_admin',
                    'permission' => json_encode($this->preparePermission(getRoutes(), 'admin')),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'role' => 'admin',
                    'permission' => json_encode($this->preparePermission(getRoutes(), 'admin')),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'role' => 'employee',
                    'permission' => json_encode($this->preparePermission(getRoutes(), 'employee')),
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'role' => 'freelancer',
                    'permission' => json_encode($this->preparePermission(getRoutes(), 'freelancer')),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
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
                'can_access' => rand(1,0),
                'method' => [
                    'GET' => rand(1,0),
                    'POST' => rand(1,0),
                    'PUT' => rand(1,0),
                    'DELETE' => rand(1,0),
                    'HEAD' => rand(1,0),
                    'OPTIONS' => rand(1,0),
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
}
