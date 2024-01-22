<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $password = $this->faker->password();
        $created = $this->faker->dateTimeBetween('-20 years');
        return [
            'username' => fake()->userName(),
            'email' => fake()->unique()->email(),
            'email_verified_at' => now(),
            'password' => Hash::make($password),
            'plain_password' => $password,
            'remember_token' => Str::random(10),
            'created_at' => formatDate($created, 'Y-m-d H:i:s'),
            'updated_at' => formatDate($this->faker->dateTimeBetween($created), 'Y-m-d H:i:s')
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
