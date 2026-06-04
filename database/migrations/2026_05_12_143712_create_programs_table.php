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
    Schema::create('programs', function (Blueprint $table) {
        $table->id();
        $table->string('badge')->nullable();
        $table->string('title');
        $table->text('description');
        $table->string('image');

        // feature cards (4 items)
        $table->string('feature_1_icon')->nullable();
        $table->string('feature_1_title');
        $table->string('feature_1_text');

        $table->string('feature_2_icon')->nullable();
        $table->string('feature_2_title');
        $table->string('feature_2_text');

        $table->string('feature_3_icon')->nullable();
        $table->string('feature_3_title');
        $table->string('feature_3_text');

        $table->string('feature_4_icon')->nullable();
        $table->string('feature_4_title');
        $table->string('feature_4_text');

        // badge overlay on image
        $table->string('overlay_year')->nullable();
        $table->string('overlay_text')->nullable();

        // button
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
        Schema::dropIfExists('programs');
    }
};
