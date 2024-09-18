<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    // Define the collection name if different from the default
    protected $collection = 'posts'; // Optional if you have a custom collection name

    // Define which attributes are mass assignable
    protected $fillable = ['title', 'content', 'user_id'];

    // Automatically set the user_id when creating a post
    protected static function booted()
    {
        static::creating(function (Post $post) {
            if (Auth::check()) {
                $post->user_id = Auth::id();
            }
        });
    }

    // Define the relationship with the User model
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
