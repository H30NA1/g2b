<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ServerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => rand(1, 20),
            'name' => $this->faker->name(),
            'hostname' => $this->faker->ipv4(),
            'port' => rand(0, 65535),
            'location' => $this->faker->country(),
            'status' => $this->faker->randomElement(['online', 'offline', 'idle']),
            'purchase_date' => $this->faker->dateTimeBetween('-10 years'),
            'warranty_expiry_date' => $this->faker->dateTimeBetween('-10 years'),
        ];
    }
}
