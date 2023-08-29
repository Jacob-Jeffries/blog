<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // The $fillable proerty allows the keys to be mass assigned.
    // I think that being explicit about what to accept is best.
    protected $fillable = ['title', 'excerpt', 'body'];

    // The $guarded property restricts the keys from mass assignment.
    // If the $guarded array is empty, no mass assignment is allowed.
    protected $guarded = ['id'];
}
