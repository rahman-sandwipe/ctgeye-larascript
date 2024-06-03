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
            $table->enum('s_category',['lead','top','specials'])->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('subcat_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->mediumText('meta_tags')->nullable();
            $table->mediumText('meta_desc')->nullable();
            $table->string('news_link')->nullable();
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
