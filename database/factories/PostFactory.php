<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

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
            'user_id' => random_int(1,3),
            'category_id' => random_int(1,3),
            'title' => fake()->catchPhrase,
            'slug' => fake()->slug,
            'excerpt' => fake()->sentence, // sentences threw an error!
            'body' => '<p>' . fake()->realText($maxNbChars = 400, $indexSize = 2) . '</p>',

        ];
    }
}
