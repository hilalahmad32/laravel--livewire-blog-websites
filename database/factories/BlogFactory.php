<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'cat_id'=>rand(1,10),
            'admin_id'=>1,
            'content'=>$this->faker->paragraph(),
            'thumb'=>'blog/thumb/thumb-card'.rand(1,8).'.png',
            'image'=>'blog/blog'.rand(1,4).'.png',
            'views'=>rand(1,100)
        ];
    }
}
