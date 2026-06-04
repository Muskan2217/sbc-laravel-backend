<?php

namespace App\Http\Controllers;

use App\Models\AchieversSection;
use App\Models\Achiever;
use Illuminate\Http\Request;

class AchieversSectionController extends Controller
{
    public function index()
    {
        $section   = AchieversSection::first();
        $achievers = Achiever::where('is_active', true)
                             ->orderBy('sort_order')
                             ->get()
                             ->map(function ($achiever) {
                                 return [
                                     'id'                => $achiever->id,
                                     'achievement_label' => $achiever->achievement_label,
                                     'name'              => $achiever->name,
                                     'age'               => $achiever->age,
                                     'image_url'         => asset('achiever-images/' . $achiever->image),
                                 ];
                             });

      return response()->json([
    'badge'     => $section->badge ?? null,
    'title'     => $section->title ?? null,
    'achievers' => $achievers,
]);
    }
}