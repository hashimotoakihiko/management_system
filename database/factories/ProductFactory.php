<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Faker\Generator as Faker;









class ProductFactory extends Factory
{
    protected $model = \App\Models\Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->randomElement,
            'product_name' => $this->faker->name,
            'price' => $this->faker->currencyCode,
            'stock' => $this->faker->numerify,
            'comment' => $this->faker->text
        ];
    }
}
