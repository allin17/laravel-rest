<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'author', 'rating', 'description',
        'avatar'
    ];

    function category() {
        return $this->belongsTo('Category');
    }

    function comments() {
        return $this->hasMany(Comment::class);
    }
}
