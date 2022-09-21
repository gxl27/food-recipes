<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'calories' => $this->faker->numberBetween(120,750),
            'duration' => $this->faker->numberBetween(3,18) * 10,
            'category_id' => Category::inRandomOrder()->first(),
        ];
    }
}
