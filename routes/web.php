<?php

use Illuminate\Support\Facades\Route;

// Define routes for the application
Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact']);
Route::get('/job', [App\Http\Controllers\IndexController::class, 'job']);

// Additional routes can be defined here as needed
Route::get('/welcome', function () {
    return view('welcome');
});