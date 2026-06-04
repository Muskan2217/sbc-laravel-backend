<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityFeature extends Model
{
    protected $fillable = [
        'icon',
        'text',
        'sort_order',
    ];
}