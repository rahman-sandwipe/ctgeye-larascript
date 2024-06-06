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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('headline');
            $table->string('report')->nullable();
            $table->string('thumbnail');
            $table->string('caption')->nullable();
            $table->mediumText('intro');
            $table->string('embed_code');
            $table->enum('video_type',['facebook','youtube'])->default('facebook');
            $table->enum('status',['active','inactive'])->default('active');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->mediumText('meta_tags')->nullable();
            $table->mediumText('meta_desc')->nullable();
            $table->string('news_link')->nullable();
            $table->timestamps();
            // php artisan migrate:refresh --path=/2024_06_03_084422_create_videos_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
