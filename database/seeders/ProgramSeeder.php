<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        Program::create([
            'badge'           => 'FLAGSHIP PROGRAM',
            'title'           => 'Budding Authors Contest',
            'description'     => "India's most prestigious writing contest for children. Selected stories are professionally edited, illustrated, and published into a real book — listed on major marketplaces.",
            'image'           => 'program.jpg',

            'feature_1_icon'  => '📖',
            'feature_1_title' => 'Published Book',
            'feature_1_text'  => 'Your child\'s name on a real book',

            'feature_2_icon'  => '🏆',
            'feature_2_title' => 'National Recognition',
            'feature_2_text'  => 'Awarded by literary experts',

            'feature_3_icon'  => '⭐',
            'feature_3_title' => 'Mentorship',
            'feature_3_text'  => '1:1 guidance from authors',

            'feature_4_icon'  => '🏅',
            'feature_4_title' => 'Marketplace Listing',
            'feature_4_text'  => 'Sold on Amazon & Flipkart',

            'overlay_year'    => '2025',
            'overlay_text'    => 'Edition now open for entries',

            'btn_label'       => 'Join Contest',
            'btn_url'         => '/contest',
        ]);
    }
}