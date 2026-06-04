<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FeaturedStory;

class FeaturedStorySeeder extends Seeder
{
    public function run(): void
    {
        FeaturedStory::create([
            'badge'        => 'BEST STORY OF THE WEEK',
            'badge_icon'   => '📖',
            'title'        => 'The Day My Shadow Ran Away',
            'description'  => 'A delightful tale by 9-year-old Aanya about a curious shadow that decides to go on an adventure of its own — and the friendship that follows.',
            'read_time'    => '4 min read',
            'author_name'  => 'Aanya R.',
            'author_grade' => 'Grade 4',
            'btn_label'    => 'Read Story',
            'btn_url'      => '/stories/the-day-my-shadow-ran-away',
            'image'        => 'featured-story.jpg',
            'is_active'    => true,
        ]);
    }
}