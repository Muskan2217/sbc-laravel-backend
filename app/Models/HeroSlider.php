<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    protected $table = 'hero_sliders';

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'button_text',
        'button_link',
        'primary_btn_label',
        'primary_btn_url',
        'outline_btn_label',
        'outline_btn_url',
        'is_active',
    ];
}