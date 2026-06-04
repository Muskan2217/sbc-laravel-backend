<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $fillable = [
        'rank',
        'name',
        'age',
        'story_title',
        'contest_type',
        'medal',
        'image',
        'sort_order',
        'is_active',
    ];
}