<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserRoleFactory extends Factory
{
    private static int $currentUserId = 2;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $permission = $this->preparePermission(getRoutes());
        return [
            'user_id' => self::$currentUserId++,
            'permission' => json_encode($permission)
        ];
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
                    'GET' => rand(1, 0),
                    'POST' => rand(1, 0),
                    'PUT' => rand(1, 0),
                    'DELETE' => rand(1, 0),
                    'HEAD' => rand(1, 0),
                    'OPTIONS' => rand(1, 0),
                ]
            ];
        }

        return $permission;
    }
}
