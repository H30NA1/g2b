<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserSettingsFactory extends Factory
{
    private static int $currentUserId = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => self::$currentUserId++, // Assign a unique random user ID
            'role' => $this->faker->randomElement(['bronze', 'silver', 'gold', 'platinum', 'diamond']),
            'status' => rand(1, 4),
            'is_blocked' => rand(1, 0),
            'noti_email' => rand(1, 0),
            'noti_device' => rand(1, 0)
        ];
    }
}
