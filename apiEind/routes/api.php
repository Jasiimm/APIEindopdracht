<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;

Route::resource('recipes', RecipeController::class);
Route::resource('categories', CategoryController::class);

