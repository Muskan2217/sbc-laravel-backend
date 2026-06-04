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
    Schema::create('winners', function (Blueprint $table) {
        $table->id();
        $table->integer('rank');
        $table->string('name');
        $table->integer('age');
        $table->string('story_title');
        $table->string('contest_type');
        $table->string('medal');
        $table->string('image');
        $table->integer('sort_order')->default(0);
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('winners');
    }
};
