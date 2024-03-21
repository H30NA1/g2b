<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ServiceDetailFactory extends Factory
{
    private static int $currentServiceId = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $password = $this->faker->password();
        return [
            'service_id' => self::$currentServiceId++,
            'username' => $this->faker->userName(),
            'password' => Hash::make($password),
            'plain_password' => $password
        ];
    }
}
