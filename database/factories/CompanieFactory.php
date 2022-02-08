<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Companie;
use Faker\Generator as Faker;









class CompanieFactory extends Factory
{
    protected $model = \App\Models\Companie::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->name,
            'street_address' => $this->faker->streetAddress
        ];
    }
}
