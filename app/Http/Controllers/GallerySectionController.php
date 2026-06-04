<?php

namespace App\Http\Controllers;

use App\Models\GallerySection;
use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GallerySectionController extends Controller
{
    public function index()
    {
        $section = GallerySection::first();
        $items   = GalleryItem::where('is_active', true)
                              ->orderBy('sort_order')
                              ->get()
                              ->map(function ($item) {
                                  return [
                                      'id'        => $item->id,
                                      'label'     => $item->label,
                                      'image_url' => asset('gallery-images/' . $item->image),
                                      'span'      => $item->span,
                                  ];
                              });

        return response()->json([
            'badge'     => $section->badge,
            'title'     => $section->title,
            'btn_label' => $section->btn_label,
            'btn_url'   => $section->btn_url,
            'items'     => $items,
        ]);
    }
}