<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    /**
     * Retrieve a list of all blog posts.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $posts = Post::paginate(10); // Adjust the number of items per page as needed
        return response()->json($posts);
    }

    /**
     * Store a newly created blog post in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($request->all());

        return response()->json([
            'message' => 'Post created successfully.',
            'post' => $post
        ], 201);
    }

    /**
     * Display the specified blog post.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function show(Post $post): JsonResponse
    {
        return response()->json($post);
    }

    /**
     * Update the specified blog post in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return JsonResponse
     */
    public function update(Request $request, Post $post): JsonResponse
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($request->only(['title', 'body']));

        return response()->json([
            'message' => 'Post updated successfully.',
            'post' => $post
        ]);
    }

    /**
     * Remove the specified blog post from storage.
     *
     * @param Post $post
     * @return JsonResponse
     */
    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json([
            'message' => 'Post deleted successfully.'
        ]);
    }
}
