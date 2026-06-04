<?php

namespace App\Http\Controllers;

use App\Models\CommunitySection;
use App\Models\CommunityFeature;
use Illuminate\Http\Request;

class CommunitySectionController extends Controller
{
    public function index()
    {
        $section  = CommunitySection::first();
        $features = CommunityFeature::orderBy('sort_order')->get();

        return response()->json([
            'badge'       => $section->badge,
            'title'       => $section->title,
            'description' => $section->description,
            'btn_label'   => $section->btn_label,
            'btn_url'     => $section->btn_url,
            'image_url'   => asset('community-images/' . $section->image),
            'features'    => $features,
        ]);
    }
}