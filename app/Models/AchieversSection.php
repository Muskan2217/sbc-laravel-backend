<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AchieversSection extends Model
{
    protected $table = 'achievers_sections';

    protected $fillable = ['badge', 'title'];
}