<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array {
        $price=$this->faker->randomFloat(2,10,500);
        return [
            "name"=>$this->faker->word(),
            "description"=>$this->faker->paragraph(),
            "price"=>$price,
            "offer"=>$price-5,
            "stock"=>$this->faker->randomFloat(0,5,50),
            "availability"=>$this->faker->randomElement([false,true]),
            "category_id"=>Category::all()->random()->id,
        ];
    }
}
