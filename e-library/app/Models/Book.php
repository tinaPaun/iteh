<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'book_id',
        'name',
        'num_pages',
        'author_id',
        'genre_id'
        
    ];
}
