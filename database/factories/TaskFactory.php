<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = $this->faker->dateTimeBetween('-20 years');
        return [
            'project_id' => rand(1, 200),
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high', 'urgent']),
            'status' => rand(0, 5),
            'deadline' => $this->faker->dateTimeBetween('-20 years'),
            'created_at' => formatDate($created, 'Y-m-d H:i:s'),
            'updated_at' => formatDate($this->faker->dateTimeBetween($created), 'Y-m-d H:i:s')
        ];
    }
}
