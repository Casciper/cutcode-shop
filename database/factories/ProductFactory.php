<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{

    #[ArrayShape(['title' => "string", 'brand_id' => "mixed", 'thumbnail' => "string", 'price' => "int"])] public function definition(): array
    {
        return [
            'title' => ucfirst($this->faker->words(2,true)),
            'brand_id' => Brand::query()->inRandomOrder()->value('id'),
            'thumbnail' => '',
            'price' => $this->faker->numberBetween(1000, 100000)
        ];
    }
}
