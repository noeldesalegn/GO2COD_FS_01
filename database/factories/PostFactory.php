<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>User::factory(),
            'title' => fake()->sentence(),
            'subTitle' => fake()->sentence(),
            'body' => $this->faker->paragraphs(3, true),
            'second_body' => $this->faker->paragraphs(2, true),
            'logo' => $this->faker->optional()->image('public/storage/images', 640, 480, null, false),
            'url' => $this->faker->url,
        ];
    }
}
