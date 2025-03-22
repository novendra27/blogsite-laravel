<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence(rand(5, 10)); // Judul antara 30-60 karakter
        $uuid = Str::uuid(); // UUID

        return [
            'id' => $uuid, // UUID
            'user_id' => User::where('role', 'author')->inRandomOrder()->first()->id ?? User::factory()->author(), // Hanya pilih user dengan role 'author'
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(), // Ambil Category acak atau buat baru
            'title' => $title,
            'slug' => Str::slug($title) . '-' . substr($uuid, -3), // Slug + 3 karakter terakhir UUID
            'content' => fake()->paragraphs(rand(2, 5), true), // 2-5 paragraf
            'photo' => null, // Default null
        ];
    }
}
