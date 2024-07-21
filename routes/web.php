<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',function(){
    return view('welcome');
});
// Other routes...

// Define resource routes for PostController
Route::resource('posts', PostController::class);
