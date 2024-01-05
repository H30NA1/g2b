<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TaskEmployeeFactory extends Factory
{
    private static int $currentTaskId = 1;
    private static int $currentUserId = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task_id' => self::$currentTaskId++,
            'lead_id' => rand(1, 2000),
            'employee_id' =>  self::$currentUserId++, 
            'progress' => rand(0, 100)
        ];
    }
}
