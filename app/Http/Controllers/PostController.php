<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    $posts = Post::paginate(10); // Adjust the number of items per page as needed
    return view('posts.index', compact('posts'));
}


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
{
    // Validate the request
    $request->validate([
        'title' => 'required',
        'body' => 'required',
    ]);

    // Update the post with validated data
    $post->update($request->only(['title', 'body']));

    // Redirect back with a success message
    return redirect()->route('posts.index')
                     ->with('success', 'Post updated successfully.');
}


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully.');
    }
}
