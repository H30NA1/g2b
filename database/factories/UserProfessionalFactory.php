<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserProfessionalFactory extends Factory
{
    private static int $currentUserId = 2;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startWorkingAt = $this->faker->dateTimeBetween('-20 years', 'now'); // Adjust the date range as needed
        return [
            'user_id' => self::$currentUserId++, // Assign a unique random user ID
            'working_experiences' => rand(1, 20),
            'specialty' => $this->faker->jobTitle(),
            'skills' => json_encode(['PHP', 'HTML', 'REACT', 'CSS', 'JAVASCRIPT']),
            'start_working_at' => $startWorkingAt,
            'end_working_at' => $this->faker->dateTimeBetween($startWorkingAt)
        ];
    }
}
