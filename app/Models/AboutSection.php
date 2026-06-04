<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'badge',
        'title',
        'italic_title',
        'description_1',
        'description_2',
        'vision_title',
        'vision_text',
        'mission_title',
        'mission_text',
        'stat_number',
        'stat_label',
        'btn_label',
        'btn_url',
        'image',
    ];
}