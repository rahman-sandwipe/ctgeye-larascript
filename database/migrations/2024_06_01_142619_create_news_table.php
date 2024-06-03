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
            $table->string('headline');
            $table->string('report')->nullable();
            $table->string('thumbnail');
            $table->string('caption')->nullable();
            $table->mediumText('intro');
            $table->longText('content');
            $table->enum('s_category',['lead','top','specials'])->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('subcat_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->mediumText('meta_tags')->nullable();
            $table->mediumText('meta_desc')->nullable();
            $table->string('video_link')->nullable();
            
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcat_id')->references('id')->on('subcategories')->onDelete('SET NULL');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
