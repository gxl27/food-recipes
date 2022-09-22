<?php

namespace App\Http\Controllers\Api;


use App\Models\Category;
use App\Models\Recipe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecipeController extends Controller
{
    public function index(){

        $recipes = Recipe::all();
        
        return $recipes;
    }

    public function index_by_category(Category $category){
        
 
        $recipes = Recipe::where('category_id', $category->id)->get();
        
        return $recipes;

    }


    public function store(Request $request){

        $formFields = $request->validate([
            'title' => ['required', 'min:3', Rule::unique('recipes', 'title')],
            'calories' => ['required', 'numeric', 'min:20', 'max:10000'],
            'duration' => ['required', 'numeric', 'min:5', 'max:360'],
            'category_id' => ['required']
        ]);
        
        // check if category id existst
        $categoryId = Category::where('id', $formFields['category_id']);
        
        if(!$categoryId) {
            
            return back()->with('message', 'Create failed!');

        }

        // check if a photo it's uploaded
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Recipe::create($formFields);
        
        return back()->with('message', 'Create successfully!');
        
    }

    public function edit(Recipe $id, Request $request){


        $formFields = $request->validate([
            'title' => ['required', 'min:3', Rule::unique('recipes', 'title')],
            'calories' => ['required', 'numeric', 'min:20', 'max:10000'],
            'duration' => ['required', 'numeric', 'min:5', 'max:360'],
            'category_id_edit' => ['required']
        ]);
        
        $categoryId = Category::where('id', $formFields['category_id']);
        
        if(!$categoryId) {
            
            return back()->with('message', 'Updated failed!');

        }

        // check if a photo it's uploaded
        if($request->hasFile('logo_edit')) {
            $formFields['logo'] = $request->file('logo_edit')->store('logos', 'public');
        }

        // because of the duplicate id of the input, need to update the model in other way
        $id->category = $formFields['category_id_edit'];
        unset($formFields['category_id_edit']);

        // dunno why the image cannot be edited and saved in the database
        $id->updatedAt = now();
        
        $id->update($formFields);
        
        return back()->with('message', 'Updated successfully!');
        
    }

    public function destroy(Recipe $id) {
        
        $id->delete();

        return redirect('/')->with('message', 'Recipe deleted successfully');
    }


    public function show(Recipe $id){
        
        return $id;

    }



    
}
