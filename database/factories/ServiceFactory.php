<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'logo' => $this->faker->imageUrl(),
            'name' => $this->faker->name(),
            'hostname' => $this->faker->ipv4(),
            'protocol' => $this->faker->randomElement(['TCP', 'UDP']),
            'type' => $this->faker->randomElement(['Internal', 'External']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'deployment_date' => $this->faker->dateTimeBetween('-10 years')
        ];
    }
}
