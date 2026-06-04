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
    Schema::create('published_books_section', function (Blueprint $table) {
        $table->id();
        $table->string('badge')->nullable();
        $table->string('title');
        $table->string('btn_label');
        $table->string('btn_url');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('published_books_section');
    }
};
