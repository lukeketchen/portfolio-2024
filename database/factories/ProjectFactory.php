<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'short_description' => $this->faker->sentence(6),
            'description' => $this->faker->sentence(10),
            'content' => $this->faker->paragraph(3),
            'image_url' => $this->faker->imageUrl(),
            'github_url' => $this->faker->url,
            'demo_url' => $this->faker->url,
            'technologies' => $this->faker->sentence(3),
            'duration' => $this->faker->sentence(3),
            'type' => $this->faker->randomElement(['personal', 'professional']),
            'category' => $this->faker->randomElement(['web', 'mobile', 'desktop']),
            'platform' => $this->faker->randomElement(['web', 'android', 'ios', 'windows', 'macos', 'linux']),
            'framework' => $this->faker->sentence(3),
            'status' => $this->faker->randomElement(['completed', 'in_progress', 'abandoned']),
            'start_date' => $this->faker->date(),
        ];
    }
}
