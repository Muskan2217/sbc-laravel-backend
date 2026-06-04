<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunitySection extends Model
{
    protected $table = 'community_section';

    protected $fillable = [
        'badge',
        'title',
        'description',
        'btn_label',
        'btn_url',
        'image',
    ];
}