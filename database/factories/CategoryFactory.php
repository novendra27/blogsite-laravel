<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->word();
        $uuid = Str::uuid(); // UUID

        return [
            'id' => $uuid, // UUID
            'name' => $name,
            'slug' => Str::slug($name) . '-' . substr($uuid, -3), // Slug + 3 karakter terakhir UUID
            'used' => 0, // Default 0 (akan dihitung berdasarkan jumlah artikel yang memakai kategori ini)
        ];
    }
}
