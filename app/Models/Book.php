<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_number',
        'title',
        'author_name',
        'author_age',
        'image',
        'amazon_url',
        'flipkart_url',
        'sort_order',
        'is_active',
    ];
}