<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->word();
        $image = 'img'.fake()->numberBetween(1, 30);

        return [
            'cate_id' => fake()->numberBetween(1, 11),
            'name' => $name,
            'slug' => $name,
            'small_description' => fake()->sentence(),
            'description' => fake()->text($maxNbChars = 300),
            'original_price' => fake()->numberBetween(1000, 300000),
            'selling_price' => fake()->numberBetween(1000, 450000),
            'image' => $image,
            'qty' => fake()->numberBetween(0, 200),
            'tax' => fake()->numberBetween(0, 8),
            'status' => fake()->numberBetween(0, 1),
            'trending' => fake()->numberBetween(0, 1),
            'meta_title' => fake()->sentence(),
            'meta_keyword' => fake()->sentence(),
            'meta_description' => fake()->sentence(),
        ];

    }
}
