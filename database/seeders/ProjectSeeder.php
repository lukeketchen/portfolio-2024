<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $copy = '# Heading
                ### h3 Heading';

        Project::factory(10)->create([
            'image_url' => 'dummyimage.png',
            'content' => $copy,
        ]);
    }
}
