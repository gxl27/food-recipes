<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;

class HomeController extends Controller
{
    // Show all listings
    public function index() {

        $categories = Category::all()->sortBy('title');
        $recipe = Recipe::with('directions')->with('ingredients')->latest()->first();
        return view('index', [
            'categories' => $categories,
            'recipe' => $recipe
        ]
    );
        
    }
    
}
