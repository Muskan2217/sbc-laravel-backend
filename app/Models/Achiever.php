<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achiever extends Model
{
    protected $fillable = [
        'achievement_label',
        'name',
        'age',
        'image',
        'sort_order',
        'is_active',
    ];
}