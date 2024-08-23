<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function dashboard()
    {
        $userCount = \App\Models\User::count();
        $postCount = \App\Models\Post::count();
        return view('admin.dashboard', compact('userCount', 'postCount'));
    }
}