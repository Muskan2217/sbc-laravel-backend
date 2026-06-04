<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseLevel extends Model
{
    protected $fillable = [
        'level_label',
        'title',
        'age_range',
        'description',
        'btn_label',
        'btn_url',
        'sort_order',
    ];
}