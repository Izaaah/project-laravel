<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_articles_table.php
    public function up()
    {
        if (!Schema::hasTable('articles')) {
            Schema::create('articles', function (Blueprint $table) {
                $table->id('id_article');
                $table->string('title');
                $table->string('slug')->unique();
                $table->longText('content');
                $table->string('thumbnail')->nullable(); // path gambar
                $table->enum('status', ['draft', 'published'])->default('draft');
                $table->timestamps();
                $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
                $table->foreignId('id_category')->constrained('categories')->onDelete('set null')->nullable();
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
