<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;

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

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth', 'verified')->group(function () {
	Route::view('dashboard', 'dashboard')->name('dashboard');
	Route::view('profile', 'profile')->name('profile');

	Route::resource('recipe', RecipeController::class);
	Route::resource('category', CategoryController::class);
	Route::resource('tag', TagController::class);
});
