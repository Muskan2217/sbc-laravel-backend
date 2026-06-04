<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommunitySection;
use App\Models\CommunityFeature;

class CommunitySectionSeeder extends Seeder
{
    public function run(): void
    {
        CommunitySection::create([
            'badge'       => 'COMMUNITY',
            'title'       => 'The Young Authors Club',
            'description' => "A vibrant home for India's most curious young storytellers. Connect, create and grow with peers who love to write.",
            'btn_label'   => 'Join the Club',
            'btn_url'     => '/community',
            'image'       => 'community.jpg',
        ]);

        $features = [
            [
                'icon'       => '📖',
                'text'       => 'Monthly story prompts & challenges',
                'sort_order' => 1,
            ],
            [
                'icon'       => '💬',
                'text'       => 'Private community of young writers',
                'sort_order' => 2,
            ],
            [
                'icon'       => '🏅',
                'text'       => 'Members-only contests & badges',
                'sort_order' => 3,
            ],
            [
                'icon'       => '👥',
                'text'       => 'Live Q&A with published authors',
                'sort_order' => 4,
            ],
        ];

        foreach ($features as $feature) {
            CommunityFeature::create($feature);
        }
    }
}