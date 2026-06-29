<?php
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroSliderController;
use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CoursesSectionController;
use App\Http\Controllers\PublishedBooksSectionController;
use App\Http\Controllers\FeaturedStoryController;
use App\Http\Controllers\NewsSectionController;
use App\Http\Controllers\CommunitySectionController;
use App\Http\Controllers\AchieversSectionController;
use App\Http\Controllers\GallerySectionController;
use App\Http\Controllers\ContestSectionController;


Route::get('/hero-sliders', [HeroSliderController::class, 'index']);
Route::get('/about-section', [AboutSectionController::class, 'index']);
Route::get('/programs', [ProgramController::class, 'index']);
Route::get('/courses-section', [CoursesSectionController::class, 'index']);
Route::get('/published-books', [PublishedBooksSectionController::class, 'index']);
Route::get('/featured-story', [FeaturedStoryController::class, 'index']);
Route::get('/news-section', [NewsSectionController::class, 'index']);
Route::get('/community-section', [CommunitySectionController::class, 'index']);
Route::get('/achievers-section', [AchieversSectionController::class, 'index']);
Route::get('/gallery-section', [GallerySectionController::class, 'index']);
Route::get('/contests', [ContestSectionController::class, 'contests']);
Route::get('/winners', [ContestSectionController::class, 'winners']);


// ─── AUTH ROUTES (public) ───
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// ─── AUTH ROUTES (protected) ───
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
});