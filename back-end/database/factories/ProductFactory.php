<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(45),
            'description' => fake()->text(45),
            'slug' => fake()->text(45),
            'price' => fake()->randomFloat(2, 100, 1000),
            'quantity' => fake()->randomNumber(2, true),
            'published' => fake()->boolean(),
            'inStock' => fake()->boolean(),
            'category_id' => Category::factory()
        ];
    }
}
