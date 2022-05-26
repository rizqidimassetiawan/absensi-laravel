<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'username' => $this->faker->userName(),
            'image' => 'default.jpg',
            'unit_id' => mt_rand(1,25),
            'password' => bcrypt('password'),
            'kode_pegawai' => $this->faker->randomNumber(5, true),
            'role_admin' => $this->faker->numberBetween(1, 3),
            'is_active' => $this->faker->numberBetween(0, 1),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}