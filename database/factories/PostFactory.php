<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
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
            'title'=>fake()->sentence(),
            'content'=>fake()->paragraph(20),
            'slug' => fake()->slug(),
            'image' => 'https://picsum.photos/200/300?random=' . fake()->unique()->numberBetween(1, 10000),
            'user_id'=>1,
        ];
    }
}