<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedStory extends Model
{
    protected $fillable = [
        'badge',
        'badge_icon',
        'title',
        'description',
        'read_time',
        'author_name',
        'author_grade',
        'btn_label',
        'btn_url',
        'image',
        'is_active',
    ];
}