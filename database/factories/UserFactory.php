<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        $name = fake()->unique()->name();
        return [
            'id' => Str::uuid(), // UUID
            'username' => Str::slug($name, ''), // Username tanpa spasi
            'name' => $name,
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'), // Hash password
            'role' => 'user', // Role default user
        ];
    }

    // Jika ingin membuat admin atau author
    public function admin(): static
    {
        return $this->state(fn(array $attributes) => ['role' => 'admin']);
    }

    public function author(): static
    {
        return $this->state(fn(array $attributes) => ['role' => 'author']);
    }
}
