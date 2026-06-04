<?php

namespace App\Http\Controllers;

use App\Models\NewsSection;
use App\Models\News;
use Illuminate\Http\Request;

class NewsSectionController extends Controller
{
    public function index()
    {
        $section = NewsSection::first();
        $news    = News::where('is_active', true)
                       ->orderBy('sort_order')
                       ->get()
                       ->map(function ($item) {
                           return [
                               'id'             => $item->id,
                               'category'       => $item->category,
                               'category_color' => $item->category_color,
                               'date'           => \Carbon\Carbon::parse($item->date)
                                                    ->format('d M Y'),
                               'title'          => $item->title,
                               'excerpt'        => $item->excerpt,
                               'btn_label'      => $item->btn_label,
                               'url'            => $item->url,
                           ];
                       });

        return response()->json([
            'badge'     => $section->badge,
            'title'     => $section->title,
            'btn_label' => $section->btn_label,
            'btn_url'   => $section->btn_url,
            'news'      => $news,
        ]);
    }
}