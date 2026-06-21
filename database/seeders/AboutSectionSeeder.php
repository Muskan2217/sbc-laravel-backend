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
            'description_1' => 'StoriesByChildren is a creative publishing platform dedicated to discovering, nurturing, and showcasing young writing talent across India. We empower children to express their imagination through words and transform their ideas into professionally published books.',
            'description_2' => 'By combining creativity, structured learning, and real-world publishing opportunities, we help young minds build confidence, communication skills, and a lifelong love for storytelling.',
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