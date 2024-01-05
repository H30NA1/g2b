<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserProfessionalFactory extends Factory
{
    private static int $currentUserId = 1;
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
            'job_title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'company_address' => $this->faker->address(),
            'company_tel' => $this->faker->phoneNumber(),
            'start_working_at' => $startWorkingAt,
            'end_working_at' => $this->faker->dateTimeBetween($startWorkingAt)
        ];
    }
}
