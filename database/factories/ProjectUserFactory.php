<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProjectUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => rand(1, 200),
            'user_id' =>  rand(1, 200), // Assign a unique random user ID
            'permission' => $this->faker->randomElement(['read', 'write', 'create', 'admin'])
        ];
    }
}
