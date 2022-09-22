<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DirectionController;
use App\Http\Controllers\Api\IngredientController;
use App\Http\Controllers\Api\RecipeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// recipes
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes')->middleware('guest');
Route::post('/recipes/store', [RecipeController::class, 'store'])->name('recipes.store')->middleware('guest');
Route::get('/recipes/category/{category}', [RecipeController::class, 'index_by_category'])->name('recipes.category')->middleware('guest');
Route::post('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit')->middleware('guest');
Route::delete('/recipes/{id}/delete', [RecipeController::class, 'destroy'])->name('recipes.delete')->middleware('guest');

// ingredients
Route::get('/ingredients/recipe/{recipe}', [IngredientController::class, 'index'])->name('ingredients')->middleware('guest');
Route::post('/ingredients/store', [IngredientController::class, 'store'])->name('ingredients.store')->middleware('guest');
Route::post('/ingredients/{id}/edit', [IngredientController::class, 'edit'])->name('ingredients.edit')->middleware('guest');
Route::delete('/ingredients/{id}/delete', [IngredientController::class, 'destroy'])->name('ingredients.delete')->middleware('guest');

// directions
Route::get('/directions/recipe/{recipe}', [DirectionController::class, 'index'])->name('directions')->middleware('guest');
Route::post('/directions/store', [DirectionController::class, 'store'])->name('directions.store')->middleware('guest');
Route::post('/directions/{id}/edit', [DirectionController::class, 'edit'])->name('directions.edit')->middleware('guest');
Route::delete('/directions/{id}/delete', [DirectionController::class, 'destroy'])->name('directions.delete')->middleware('guest');
Route::get('/directions/{id}', [DirectionController::class, 'show'])->name('directions.show')->middleware('guest');

// dont know why the middleware are not working in this files / change the category call into the web file temporally
// Route::get('/category', [CategoryController::class, 'index'])->name('category')->middleware('auth');