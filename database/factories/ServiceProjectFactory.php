<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ServiceProjectFactory extends Factory
{
    private static int $currentProjectId = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $password = $this->faker->password();
        return [
            'project_id' => self::$currentProjectId++,
            'service_id' => rand(1, 20),
            'status' => $this->faker->randomElement(['open', 'progressing', 'resolved', 'confirmation', 'pending', 'closed']),
            'username' => $this->faker->userName(),
            'password' => Hash::make($password),
        ];
    }
}
