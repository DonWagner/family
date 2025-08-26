<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::middleware(['auth', 'verified'])->prefix('recipes')->group(function () {
    Route::resource('/', RecipeController::class)->names('recipes');
});
