<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'badge',
        'title',
        'description',
        'image',
        'feature_1_icon',
        'feature_1_title',
        'feature_1_text',
        'feature_2_icon',
        'feature_2_title',
        'feature_2_text',
        'feature_3_icon',
        'feature_3_title',
        'feature_3_text',
        'feature_4_icon',
        'feature_4_title',
        'feature_4_text',
        'overlay_year',
        'overlay_text',
        'btn_label',
        'btn_url',
    ];
}