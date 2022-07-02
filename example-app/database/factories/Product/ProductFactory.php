<?php

namespace Database\Factories\Product;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product\Product>
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
        return [
            'title' => $this->faker->text(20),
            'price_in' => random_int(100,5000),
            'percent' => random_int(1,100),
            'unit' => $this->faker->word(4),
            'amount' => random_int(1,50),
            'category_id' => Category::get()->random()->id,
            'brand_id' => Brand::get()->random()->id,
        ];
    }
}
