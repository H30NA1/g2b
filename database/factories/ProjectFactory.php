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
        $status = ['in_progress','pending','completed'];
        $priority = ['low','medium','high'];
        $visibility = ['public','private'];
        return [
            'name' => $this->faker->name(), // Assign a unique random user ID
            'status' => $this->faker->randomElement($status),
            'priority' => $this->faker->randomElement($priority),
            'visibility' => $this->faker->randomElement($visibility),
            'description' => $this->faker->text(),
            'summary' => $this->faker->text(),
            'began_at' => $starting,
            'finished_at' => $finishing,
            'deadline_at' => $this->faker->dateTimeBetween($starting, $finishing)
        ];
    }
}
