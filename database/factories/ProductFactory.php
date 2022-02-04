<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->$faker->name,
            'price' => $this->$faker->currencyCode,
            'stock' => $this->$faker->numerify,
            'comment' => $this->$faker->text
        ];
    }
}
