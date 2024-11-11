<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Project;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => env('TEST_USERNAME', 'Test User'),
            'email' => env('TEST_EMAIL', 'test@email.com'),
            'password' => bcrypt(env('TEST_PASSWORD', 'password')),
        ]);

        Article::factory(10)->create([
            'image_url' => 'dummyimage.png'
        ]);
        $this->call([
            ProjectSeeder::class,
        ]);
    }
}
