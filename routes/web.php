<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');

// Show Register/Create Form
Route::get('/register', [AuthController::class, 'create'])->name('register')->middleware('guest');

// Create New User
Route::post('/auth', [AuthController::class, 'store']);

// Log User Out
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/auth/authenticate', [AuthController::class, 'authenticate']);

// this should be in the api file, but the middleware are not working there
Route::get('/api/category', [CategoryController::class, 'index'])->name('category')->middleware('auth');