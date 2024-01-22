<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserSettingsFactory extends Factory
{
    private static int $currentUserId = 2;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = rand(0, 2);
        $created = $this->faker->dateTimeBetween('-20 years');
        return [
            'user_id' => self::$currentUserId++, // Assign a unique random user ID
            'role' => $this->faker->randomElement(['admin', 'employee', 'freelancer']),
            'status' => $status,
            'is_blocked' => $status == 0 ? 1 : 0,
            'noti_email' => rand(1, 0),
            'noti_device' => rand(1, 0),
            'created_at' => formatDate($created, 'Y-m-d H:i:s'),
            'updated_at' => formatDate($this->faker->dateTimeBetween($created), 'Y-m-d H:i:s')
        ];
    }
}
