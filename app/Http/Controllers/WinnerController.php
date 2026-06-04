<?php

namespace App\Http\Controllers;

use App\Models\Winner;

class WinnerController extends Controller
{
    public function index()
    {
        $winners = Winner::where('is_active', true)
            ->orderBy('sort_order')
            ->get()
            ->map(function ($winner) {
                return [
                    'id'           => $winner->id,
                    'rank'         => $winner->rank,
                    'name'         => $winner->name,
                    'age'          => $winner->age,
                    'story_title'  => $winner->story_title,
                    'contest_type' => $winner->contest_type,
                    'medal'        => $winner->medal,
                    'image_url'    => asset('winner-images/' . $winner->image),
                ];
            });

        return response()->json($winners);
    }
}