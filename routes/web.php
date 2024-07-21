<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Other routes...

// Define resource routes for PostController
Route::resource('posts', PostController::class);
