<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_article_tags_table.php
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) {
            $table->foreignId('id_article')->constrained('articles', 'id_article')->onDelete('cascade');
            $table->foreignId('id_tag')->constrained('tags')->onDelete('cascade');
            $table->primary(['id_article', 'id_tag']);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tag');
    }
};
