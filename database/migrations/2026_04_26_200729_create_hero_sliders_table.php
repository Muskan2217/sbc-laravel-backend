<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_sliders', function (Blueprint $table) {
            $table->id();

            $table->string('badge')->nullable(); 

            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('image');

            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();

            $table->string('primary_btn_label')->nullable();
            $table->string('primary_btn_url')->nullable();
            $table->string('outline_btn_label')->nullable();
            $table->string('outline_btn_url')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_sliders');
    }
};