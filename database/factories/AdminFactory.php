<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'password'=>Hash::make('1234'),
            'roll'=>rand(0,1),
        ];
    }
}
