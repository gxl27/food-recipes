<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Direction;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $categories = Category::factory(4)->create();
        $recipes = Recipe::factory(7)->create();
        $ingredients = Ingredient::factory(70)->create();
        $directions = Direction::factory(70)->create();

    }
}
