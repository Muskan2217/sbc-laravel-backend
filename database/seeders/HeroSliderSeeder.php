<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSliderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('hero_sliders')->truncate(); 

        DB::table('hero_sliders')->insert([

            //  Banner 1 
            [
                'badge' => "GLOBAL WRITING PLATFORM",
                'title' => 'Give Your Stories a Global Audience',
                'subtitle' => 'Submit stories and poems for free. Participate in monthly contests and get a chance to enter the Grand Finale 2026.',
                'image' => 'hero-slider-1.webp',
                'primary_btn_label' => 'Start Writing',
                'primary_btn_url' => '/login',
                'outline_btn_label' => 'Read Stories',
                'outline_btn_url' => '/stories',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Banner 2
            [
                'badge' => 'LEVEL-BASED CREATIVE WRITING',
                'title' => 'Word Ninjas Story Writing Camp',
                'subtitle' => 'A structured, 4-level writing journey that transforms curious kids into confident and expressive writers and master storytellers.',
                'image' => 'hero-slider-2.webp',
                'primary_btn_label' => 'Sign Up',
                'primary_btn_url' => '/register',
                'outline_btn_label' => 'Explore Now',
                'outline_btn_url' => '/courses',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Banner 3 
            [
                'badge' => 'FOR SCHOOLS',
                'title' => 'Budding Authors Contest for Schools',
                'subtitle' => 'Turn your students into published authors with our anthology series that inspires creativity. Partnered with Sapna Book House to bring young talent to the global stage.',
                'image' => 'hero-slider-3.webp',
                'primary_btn_label' => 'Register Your School',
                'primary_btn_url' => '/school-interest-form',
                'outline_btn_label' => null,
                'outline_btn_url' => null,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //  Banner 
            [
                'badge' => 'STORYTELLING SESSIONS',
                'title' => 'Once Upon A Story: Weekly Storytelling Sessions',
                'subtitle' => 'A new story every week. Immersive, magical, prop-rich storytelling designed to spark vivid imaginations and a lifelong love for books.',
                'image' => 'hero-slider-4.webp',
                'primary_btn_label' => 'Book a Session',
                'primary_btn_url' => '/storytelling-registration',
                'outline_btn_label' => 'Learn More',
                'outline_btn_url' => '/about-sessions',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //  Banner 5 
            [
                'badge' => '10,000+ YOUNG WRITERS',
                'title' => 'Join the Young Writers Community',
                'subtitle' => "Become part of India's largest community of published children authors.",
                'image' => 'hero-slider-5.webp',
                'primary_btn_label' => 'Become a Member',
                'primary_btn_url' => '/community',
                'outline_btn_label' => 'Learn More',
                'outline_btn_url' => '/about-community',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //  Banner 6 
            [
                'badge' => 'SOLO PUBLISHING',
                'title' => 'Let Your Child Become a Published Author',
                'subtitle' => 'From imagination to a real, printed book — we guide every young writer through their publishing journey.',
                'image' => 'hero-slider-6.webp',
                'primary_btn_label' => 'Start Their Story',
                'primary_btn_url' => '/courses',
                'outline_btn_label' => 'Learn More',
                'outline_btn_url' => '/about',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}