<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('featured_stories', function (Blueprint $table) {
        $table->id();
        $table->string('badge')->nullable();
        $table->string('badge_icon')->nullable();
        $table->string('title');
        $table->text('description');
        $table->string('read_time')->nullable();
        $table->string('author_name');
        $table->string('author_grade');
        $table->string('btn_label');
        $table->string('btn_url');
        $table->string('image');
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_stories');
    }
};
