<?php

namespace App\Http\Controllers\Api;


use App\Models\Ingredient;
use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class IngredientController extends Controller
{
    public function index(Recipe $recipe){
        
        $ingredients = $recipe->ingredients();
        $response = [];

        // this should be done in other way
        for($i = 0; $i < $ingredients->count(); $i++) {
            $response[$i] = $ingredients->get()[$i]->toJson();
        }
 
        return $response;
    }


    public function store(Request $request){

        $formFields = $request->validate([
            'title' => ['required', 'min:3'],
            'position' => [],
            'recipe_id' => ['required']
        ]);
        
        // check if recipe id existst
        $recipeId = Recipe::where('id', $formFields['recipe_id']);
        
        if(!$recipeId) {
            
            return back()->with('message', 'Create failed!');

        }

        Ingredient::create($formFields);
        
        return back()->with('message', 'Create successfully!');
        
    }

    public function edit(Ingredient $id, Request $request){


        $formFields = $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'position' => [],

        ]);

        $id->update($formFields);
        
        return back()->with('message', 'Updated successfully!');
        
    }

    public function destroy(Ingredient $id) {
        
        $id->delete();

        return redirect('/')->with('message', 'Recipe deleted successfully');
    }

    
}
