<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat User
        User::factory()->admin()->create(); // 1 Admin
        User::factory()->count(5)->create(); // 5 User random
        User::factory()->author()->count(10)->create(); // 10 Author
        // Buat Kategori
        Category::factory()->count(10)->create();
        // Buat Artikel
        Article::factory()->count(50)->create();
    }
}
