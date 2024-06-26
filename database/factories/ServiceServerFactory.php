<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ServiceServerFactory extends Factory
{
    private static int $currentServerId = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $password = $this->faker->password();
        return [
            'server_id' => rand(1, 50),
            'service_id' => rand(1, 20),
            'status' => $this->faker->randomElement(['open', 'progressing', 'resolved', 'confirmation', 'pending', 'closed']),
            'username' => $this->faker->userName(),
            'password' => Hash::make($password),
        ];
    }
}
