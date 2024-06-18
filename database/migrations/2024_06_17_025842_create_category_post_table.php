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
        Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained(
                table: 'posts',
                indexName: 'posts_post_id',
            );
            $table->foreignId('category_id')->constrained(
                table: 'category',
                indexName: 'posts_category_id',
            );
            $table->timestamps();

            // Unik untuk mencegah duplikasi
            $table->unique(['category_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
