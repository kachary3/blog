<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the posts collection before seeding
        DB::collection('posts')->delete();

        // Insert 50 posts into the posts collection
        $posts = [];

        for ($i = 1; $i <= 50; $i++) {
            $posts[] = [
                'title' => 'Post Title ' . $i,
                'content' => 'This is the content for post ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::collection('posts')->insert($posts);
    }
}
