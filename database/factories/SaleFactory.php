<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sale;
use Faker\Generator as Faker;









class SaleFactory extends Factory
{
    protected $model = \App\Models\Sale::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->randomElement
        ];
    }
}
