<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Specify which attributes are mass assignable
    protected $fillable = [
        'title',
        'body',
        // Add other attributes if necessary
    ];
}
