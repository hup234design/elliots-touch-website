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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('hero_image_left_media_id')->nullable()->constrained('media')->nullOnDelete();
            $table->foreignId('hero_image_center_media_id')->nullable()->constrained('media')->nullOnDelete();
            $table->foreignId('hero_image_right_media_id')->nullable()->constrained('media')->nullOnDelete();
            $table->string('introduction_heading')->nullable();
            $table->text('introduction')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
