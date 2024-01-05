<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $starting = $this->faker->dateTimeBetween('-20 years');
        return [
            'name' => $this->faker->name(), // Assign a unique random user ID
            'server' => $this->faker->ipv4(),
            'status' => rand(0, 5),
            'began_at' => $starting,
            'finished_at' => $this->faker->dateTimeBetween($starting),
        ];
    }
}
