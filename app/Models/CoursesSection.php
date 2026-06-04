<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursesSection extends Model
{
    protected $fillable = [
        'badge',
        'title',
        'description',
        'cta_label',
        'cta_url',
    ];
}