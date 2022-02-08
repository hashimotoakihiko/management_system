<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Faker\Generator as Faker;

// $factory->define(User::class, function
// (Faker $faker) {
//         return [
//             'email' => $this->$faker->safeEmail,
//             'password' => $this->$faker->password
//         ];
// });

class UserFactory extends Factory
{

    protected $model = \App\Models\User::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password
        ];
    }
}
