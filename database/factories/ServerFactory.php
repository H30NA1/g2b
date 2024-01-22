<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ServerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $password = $this->faker->password();
        $created = $this->faker->dateTimeBetween('-20 years');
        return [
            'service_id' => rand(1, 10),
            'host' => $this->faker->ipv4(),
            'port' => rand(0, 65535),
            'username' => $this->faker->userName(),
            'password' => Hash::make($password),
            'plain_password' => $password,
            'created_at' => formatDate($created, 'Y-m-d H:i:s'),
            'updated_at' => formatDate($this->faker->dateTimeBetween($created), 'Y-m-d H:i:s')
        ];
    }
}
