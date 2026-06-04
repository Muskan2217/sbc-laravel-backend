<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSliderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('hero_sliders')->insert([
            // Image image_3c1733.png
            [
                'badge' => "INDIA'S LEADING YOUNG AUTHORS PLATFORM",
                'title' => 'Let Your Child Become a Published Author',
                'subtitle' => 'From imagination to a real, printed book — we guide every young writer through their publishing journey.',
                'image' => 'hero-slider-1.jpg',
                'button_text' => null,
                'button_link' => null,
                'primary_btn_label' => 'Start Their Story',
                'primary_btn_url' => '/courses',
                'outline_btn_label' => 'Learn More',
                'outline_btn_url' => '/about',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Image image_3c16fd.png
            [
                'badge' => 'LEVEL-BASED CREATIVE WRITING',
                'title' => 'Word Ninjas Writing Programs',
                'subtitle' => 'A structured 4-level journey that turns curious kids into confident, expressive writers.',
                'image' => 'hero-slider-2.jpg',
                'button_text' => null,
                'button_link' => null,
                'primary_btn_label' => 'Explore Programs',
                'primary_btn_url' => '/courses',
                'outline_btn_label' => 'Learn More',
                'outline_btn_url' => '/about',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Image image_3c1454.png
            [
                'badge' => '10,000+ YOUNG WRITERS',
                'title' => 'Join the Young Writers Community',
                'subtitle' => "Become part of India's largest community of published children authors.",
                'image' => 'hero-slider-3.jpg',
                'button_text' => null,
                'button_link' => null,
                'primary_btn_label' => 'Become a Member',
                'primary_btn_url' => '/community',
                'outline_btn_label' => 'Learn More',
                'outline_btn_url' => '/about-community',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Image image_3c1433.png
            [
                'badge' => 'NOW OPEN FOR 2025 ENTRIES',
                'title' => 'Budding Authors Contest',
                'subtitle' => "India's most celebrated writing competition for children. Win mentorship, prizes and global publication.",
                'image' => 'hero-slider-4.jpg',
                'button_text' => null,
                'button_link' => null,
                'primary_btn_label' => 'Join the Contest',
                'primary_btn_url' => '/contests',
                'outline_btn_label' => 'Learn More',
                'outline_btn_url' => '/contest-details',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Image image_3c1355.png
            [
                'badge' => 'WEEKLY SESSIONS FOR AGES 4-8',
                'title' => 'Storytelling Sessions',
                'subtitle' => 'Magical, prop-rich storytelling that sparks imagination and a lifelong love for stories.',
                'image' => 'hero-slider-5.jpg',
                'button_text' => null,
                'button_link' => null,
                'primary_btn_label' => 'Book a Session',
                'primary_btn_url' => '/sessions',
                'outline_btn_label' => 'Learn More',
                'outline_btn_url' => '/about-sessions',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}