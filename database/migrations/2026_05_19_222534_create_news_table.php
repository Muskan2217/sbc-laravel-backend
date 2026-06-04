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
    Schema::create('news', function (Blueprint $table) {
        $table->id();
        $table->string('category');
        $table->string('category_color')->default('gray');
        $table->date('date');
        $table->string('title');
        $table->text('excerpt');
        $table->string('btn_label')->default('Read more');
        $table->string('url');
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
        Schema::dropIfExists('news');
    }
};
