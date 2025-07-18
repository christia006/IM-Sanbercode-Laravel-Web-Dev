<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;

// Home page
Route::get('/', [DashboardController::class, 'home']);

// Register form page
Route::get('/register', [FormController::class, 'register']);

// Process form and show welcome page
Route::post('/welcome', [FormController::class, 'welcome']);

Route::resource('genre', GenreController::class);