<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->word();
        return [
            'name' => $name,
            'slug' => $name,
            'description' => fake()->text($maxNbChars = 300),
            'status' => fake()->numberBetween(0, 1),
            'popular' => fake()->numberBetween(0, 1),
            'image' => $name,
            'meta_title' => fake()->text($maxNbChars = 10),
            'meta_description' => fake()->text($maxNbChars = 15),
            'meta_keyword' => fake()->text($maxNbChars = 5)
        ];
    }
}
