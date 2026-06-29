<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    public function run(): void
    {
        AboutSection::create([
            'badge'         => 'WHO WE ARE',
            'title'         => "Nurturing India's",
            'italic_title'  => 'Young Storytellers',
            'description_1' => 'StoriesByChildren is a vibrant publishing ecosystem dedicated to discovering, nurturing, and spotlighting young storytelling talent across Globe. Through exciting contests, interactive reading circles, and curated anthology series, we empower children to channel their imaginations into words and transform their ideas into professionally printed books.',
            'description_2' => 'By fusing creative freedom with structured mentorship and prestigious publication milestones, we help young minds build lifelong confidence, expressive communication skills, and the lasting joy of becoming published author.',
            'vision_title'  => 'Our Vision',
            'vision_text'   => 'To create a world where every child feels inspired to express, imagine, and publish their unique story.',
            'mission_title' => 'Our Mission',
            'mission_text'  => 'To nurture young writers through structured programs, storytelling experiences, and publishing opportunities that turn creativity into achievement.',
            'stat_number'   => '12+',
            'stat_label'    => 'Published Books',
            'btn_label'     => 'Explore Our Programs',
            'btn_url'       => '/programs',
            'image'         =>  'about.jpg', 
        ]);
    }
}