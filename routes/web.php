<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Redirect the root URL to the posts index route
Route::get('/', function () {
    return redirect()->route('posts.index');
});

// Define resource routes for PostController
Route::resource('posts', PostController::class);
