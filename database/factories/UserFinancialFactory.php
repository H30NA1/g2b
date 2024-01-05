<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFinancialFactory extends Factory
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
            'salary' => rand(100000000, 999999999),
            'bank_name' => 'bank ' . uniqid('', true),
            'account_number' => $this->faker->creditCardNumber(),
            'routing_number' => rand(111, 9999),
            'currency' => $this->faker->currencyCode()
        ];
    }
}
