<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProjectInformationFactory extends Factory
{
    private static int $currentProjectId = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => self::$currentProjectId++,
            'client' => $this->faker->name(),
            'cost' => rand(1000000, 99999999999),
            'description' => $this->faker->paragraph(),
        ];
    }
}
