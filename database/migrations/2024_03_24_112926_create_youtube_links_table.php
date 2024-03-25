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
        Schema::create('youtube_links', function (Blueprint $table) {
            $table->id();
            $table->string('youtubeLink');
            $table->foreignId('category_id')->references('id')->on('article_categories')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('article_id')->references('id')->on('articles')->onDelete('cascade')->onUpdate('cascade');         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youtube_links');
    }
};
