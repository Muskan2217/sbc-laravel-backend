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
    Schema::create('about_sections', function (Blueprint $table) {
        $table->id();
        $table->string('badge')->nullable();
        $table->string('title');
        $table->string('italic_title');
        $table->text('description_1');
        $table->text('description_2');
        $table->string('vision_title');
        $table->text('vision_text');
        $table->string('mission_title');
        $table->text('mission_text');
        $table->string('stat_number');
        $table->string('stat_label');
        $table->string('btn_label');
        $table->string('btn_url');
        $table->string('image');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
