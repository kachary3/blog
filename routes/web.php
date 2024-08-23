<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

// Redirect the root URL to the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Routes that require authentication
Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class);
    Route::get('/home', [PostController::class, 'index'])->name('home');
});

// Admin routes with middleware to ensure only admins have access
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard route for admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // User management routes
    Route::resource('users', AdminUserController::class)
        ->names([
            'index' => 'admin.users.index',
            'create' => 'admin.users.create',
            'store' => 'admin.users.store',
            'show' => 'admin.users.show',
            'edit' => 'admin.users.edit',
            'update' => 'admin.users.update',
            'destroy' => 'admin.users.destroy',
        ]);

    // Post management routes
    Route::resource('posts', AdminPostController::class)
        ->names([
            'index' => 'admin.posts.index',
            'create' => 'admin.posts.create',
            'store' => 'admin.posts.store',
            'show' => 'admin.posts.show',
            'edit' => 'admin.posts.edit',
            'update' => 'admin.posts.update',
            'destroy' => 'admin.posts.destroy',
        ]);
});

// Authentication routes
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
