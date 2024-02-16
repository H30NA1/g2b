<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserTaskFactory extends Factory
{
    private static int $currentTaskId = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_id' => self::$currentTaskId++,
            'lead_id' => rand(1, 50),
            'user_id' =>  rand(1, 50),
            'progress' => $this->faker->randomElement(['waiting', 'pending', 'processing', 'confirming', 'finished', 'failed', 'canceled'])
        ];
    }
}
