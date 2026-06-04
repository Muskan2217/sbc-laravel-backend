<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsSection extends Model
{
    protected $table = 'news_section';

    protected $fillable = [
        'badge',
        'title',
        'btn_label',
        'btn_url',
    ];
}