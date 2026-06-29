<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

public function run(): void
{
    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

   $this->call([
    RolesAndPermissionsSeeder::class,
    HeroSliderSeeder::class,
    AboutSectionSeeder::class,
    ProgramSeeder::class,
    CoursesSectionSeeder::class,
    PublishedBooksSectionSeeder::class,
    FeaturedStorySeeder::class,
    NewsSectionSeeder::class,
    CommunitySectionSeeder::class,
    AchieversSectionSeeder::class,
    GallerySectionSeeder::class,
    ContestSectionSeeder::class,
]);
}
}

