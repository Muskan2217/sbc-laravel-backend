<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $program = Program::first();

        return response()->json([
            'badge'           => $program->badge,
            'title'           => $program->title,
            'description'     => $program->description,
            'image_url'       => asset('program-images/' . $program->image),

            'feature_1_icon'  => $program->feature_1_icon,
            'feature_1_title' => $program->feature_1_title,
            'feature_1_text'  => $program->feature_1_text,

            'feature_2_icon'  => $program->feature_2_icon,
            'feature_2_title' => $program->feature_2_title,
            'feature_2_text'  => $program->feature_2_text,

            'feature_3_icon'  => $program->feature_3_icon,
            'feature_3_title' => $program->feature_3_title,
            'feature_3_text'  => $program->feature_3_text,

            'feature_4_icon'  => $program->feature_4_icon,
            'feature_4_title' => $program->feature_4_title,
            'feature_4_text'  => $program->feature_4_text,

            'overlay_year'    => $program->overlay_year,
            'overlay_text'    => $program->overlay_text,

            'btn_label'       => $program->btn_label,
            'btn_url'         => $program->btn_url,
        ]);
    }
}