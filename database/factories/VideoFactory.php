<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'time'=>fake()->randomNumber(3),
            'description'=>fake()->realText(100),
            'tumbnail'=>"https://loremflickr.com/446/240/world?random=3".rand(1,30)
        ];
    }
}
