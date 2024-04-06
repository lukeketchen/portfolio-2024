<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
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
        return [
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->paragraph(3),
            'image_url' => $this->faker->imageUrl(),
            'category' => $this->faker->randomElement(['web', 'mobile', 'desktop']),
            'view_count' => $this->faker->numberBetween(0, 1000),
            'published_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
