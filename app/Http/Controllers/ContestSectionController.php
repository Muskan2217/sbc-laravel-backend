<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use App\Models\Winner;
use Illuminate\Http\Request;

class ContestSectionController extends Controller
{
    public function contests()
    {
        $contests = Contest::where('is_active', true)
            ->orderBy('sort_order')
            ->get()
            ->map(function ($contest) {
                return [
                    'id'          => $contest->id,
                    'category'    => $contest->category,
                    'title'       => $contest->title,
                    'description' => $contest->description,
                    'closes_at'   => $contest->closes_at,
                    'btn_label'   => $contest->btn_label,
                    'btn_url'     => $contest->btn_url,
                ];
            });

        return response()->json($contests);
    }

    public function winners(Request $request)
    {
        $type = $request->query('type', 'Story Writing');

        $winners = Winner::where('is_active', true)
            ->where('contest_type', $type)
            ->orderBy('rank')
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