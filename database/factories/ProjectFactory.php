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
        $finishing = $this->faker->dateTimeBetween($starting);
        $created = $this->faker->dateTimeBetween('-20 years');
        return [
            'name' => $this->faker->name(), // Assign a unique random user ID
            'began_at' => $starting,
            'finished_at' => $finishing,
            'deadline_at' => $this->faker->dateTimeBetween($starting, $finishing),
            'created_at' => formatDate($created, 'Y-m-d H:i:s'),
            'updated_at' => formatDate($this->faker->dateTimeBetween($created), 'Y-m-d H:i:s')
        ];
    }
}
