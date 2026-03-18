<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "description"=>fake()->paragraph(),
            "user_id" => 1,
            "commentable_id" => rand(1,3),
            "commentable_type" => "App\Models\Post"

        ];
    }
}
