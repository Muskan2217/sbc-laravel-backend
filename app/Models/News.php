<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'category',
        'category_color',
        'date',
        'title',
        'excerpt',
        'btn_label',
        'url',
        'sort_order',
        'is_active',
    ];
}