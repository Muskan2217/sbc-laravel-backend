<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeroSliderController extends Controller
{
    //  Fetching Hero slider data
  public function index()
{
    $sliders = DB::table('hero_sliders')
        ->where('is_active', true)
        ->get()
        ->map(function ($slide) {
            return [
                'id' => $slide->id,
                'title' => $slide->title,
                'subtitle' => $slide->subtitle,

                // slider images 
                'image_url' => asset('hero-slider-images/' . $slide->image),

                'primary_btn_label' => $slide->primary_btn_label,
                'primary_btn_url' => $slide->primary_btn_url,
                'outline_btn_label' => $slide->outline_btn_label,
                'outline_btn_url' => $slide->outline_btn_url,
            ];
        });

    return response()->json($sliders);
}
}