<?php

namespace App\Http\Controllers;

use App\Models\CoursesSection;
use App\Models\CourseLevel;
use Illuminate\Http\Request;

class CoursesSectionController extends Controller
{
    public function index()
    {
        $section = CoursesSection::first();
        $levels  = CourseLevel::orderBy('sort_order')->get();

        return response()->json([
            'badge'       => $section->badge,
            'title'       => $section->title,
            'description' => $section->description,
            'levels'      => $levels,
            'cta_label'   => $section->cta_label,
            'cta_url'     => $section->cta_url,
        ]);
    }
}