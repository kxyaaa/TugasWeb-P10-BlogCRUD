<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect()->route('posts.index');
});

// Requirement 1: Route::resource dengan named routes
Route::resource('posts', PostController::class);