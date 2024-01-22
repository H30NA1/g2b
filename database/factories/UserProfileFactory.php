<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserProfileFactory extends Factory
{
    private static int $currentUserId = 2;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = $this->faker->dateTimeBetween('-20 years');
        return [
            'user_id' => self::$currentUserId++, // Assign a unique random user ID
            'birthday' => $this->faker->dateTimeInInterval('-30 years', '-18 years'),
            'sex' => $this->faker->randomElement(['male', 'female', 'other']),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'nationality' => $this->faker->country(),
            'post_code' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'tel' => $this->faker->phoneNumber(),
            'description' => $this->faker->paragraph(),
            'created_at' => formatDate($created, 'Y-m-d H:i:s'),
            'updated_at' => formatDate($this->faker->dateTimeBetween($created), 'Y-m-d H:i:s')
        ];
    }
}
