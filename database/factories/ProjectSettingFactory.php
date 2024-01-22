<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProjectSettingFactory extends Factory
{
    private static int $currentProjectId = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $created = $this->faker->dateTimeBetween('-20 years');
        return [
            'project_id' => self::$currentProjectId++,
            'server_id' => rand(1, 20),
            'status' => rand(0, 5),
            'extra' => json_encode([
                'server' => $this->faker->ipv4(),
            ]),
            'created_at' => formatDate($created, 'Y-m-d H:i:s'),
            'updated_at' => formatDate($this->faker->dateTimeBetween($created), 'Y-m-d H:i:s')
        ];
    }
}
