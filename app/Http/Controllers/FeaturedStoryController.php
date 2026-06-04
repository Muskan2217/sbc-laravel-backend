<?php

namespace App\Http\Controllers;

use App\Models\FeaturedStory;
use Illuminate\Http\Request;

class FeaturedStoryController extends Controller
{
    public function index()
    {
        $story = FeaturedStory::where('is_active', true)->first();

        return response()->json([
            'badge'        => $story->badge,
            'badge_icon'   => $story->badge_icon,
            'title'        => $story->title,
            'description'  => $story->description,
            'read_time'    => $story->read_time,
            'author_name'  => $story->author_name,
            'author_grade' => $story->author_grade,
            'btn_label'    => $story->btn_label,
            'btn_url'      => $story->btn_url,
            'image_url'    => asset('featured-story-images/' . $story->image),
        ]);
    }
}