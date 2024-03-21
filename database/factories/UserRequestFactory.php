<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['approved', 'pending', 'rejected']);
        $requestAt = $this->faker->dateTimeBetween('-5 years');
        
        return [
            'user_id' => rand(2, 201),
            'request_handler_id' => rand(2, 201),
            'title' => $this->faker->name(),
            'content' => $this->faker->paragraph(),
            'destination' => $this->faker->name(),
            'type' => $this->faker->randomElement(['authorization', 'overtime', 'leave', 'reset-account']),
            'status' => $status,
            'requested_at' => $requestAt,
            'approved_at' => $status == 'approved' ? $this->faker->dateTimeBetween($requestAt) : null,
            'rejected_at' => $status == 'rejected' ? $this->faker->dateTimeBetween($requestAt) : null,
        ];
    }
}
