<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_name'=>$this->faker->name(),
            'image'=>'category/c'.rand(1,5).'.jpg',
            'status'=>rand(1,0),
            'posts'=>rand(1,10),
        ];
    }
}
