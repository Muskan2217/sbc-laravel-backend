<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublishedBooksSection extends Model
{
    protected $table = 'published_books_section';
    
    protected $fillable = [
        'badge',
        'title',
        'btn_label',
        'btn_url',
    ];
}