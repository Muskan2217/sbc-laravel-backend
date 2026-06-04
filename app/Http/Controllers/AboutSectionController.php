<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
   public function index()
{
    $about = AboutSection::first();
    
    return response()->json([
        'badge'         => $about->badge,
        'title'         => $about->title,
        'italic_title'  => $about->italic_title,
        'description_1' => $about->description_1,
        'description_2' => $about->description_2,
        'vision_title'  => $about->vision_title,
        'vision_text'   => $about->vision_text,
        'mission_title' => $about->mission_title,
        'mission_text'  => $about->mission_text,
        'stat_number'   => $about->stat_number,
        'stat_label'    => $about->stat_label,
        'btn_label'     => $about->btn_label,
        'btn_url'       => $about->btn_url,
        'image_url'     => asset('about-images/' . $about->image),
    ]);
}
}

