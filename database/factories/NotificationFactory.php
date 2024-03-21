<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isRead = rand(0, 1);
        
        return [
            'user_id' => rand(1, 201),
            'title' => $this->faker->name(),
            'content' => $this->faker->paragraph(),
            'is_read' => $isRead,
            'read_at' => isset($isRead) ? $this->faker->dateTimeBetween('-3 years') : null
        ];
    }
}
