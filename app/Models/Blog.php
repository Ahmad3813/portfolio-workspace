<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

protected $fillable = [
    'image',
    'short_description',
    'long_description',
    'published_at',
    'short_title',
    'long_title',
];
        
}
