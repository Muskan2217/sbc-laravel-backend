<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GallerySection extends Model
{
    protected $table = 'gallery_section';

    protected $fillable = [
        'badge',
        'title',
        'btn_label',
        'btn_url',
    ];
}