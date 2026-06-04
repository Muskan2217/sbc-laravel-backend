<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    protected $fillable = [
        'category',
        'title',
        'description',
        'closes_at',
        'btn_label',
        'btn_url',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'closes_at' => 'datetime',
    ];
}