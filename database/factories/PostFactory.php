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
     * Define the model's default state https://fakerphp.github.io/
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
            'excerpt' => '<p>' . implode('</p><br/><p>', $this->faker->paragraphs(2)) . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(10)) . '</p>',

        ];
    }
}
