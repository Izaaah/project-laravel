<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_comments_table.php
    // database/migrations/xxxx_xx_xx_create_comments_table.php
public function up()
{
    Schema::create('comments', function (Blueprint $table) {
        $table->id('id_comment');
        $table->foreignId('id_article')->constrained('articles', 'id_article')->onDelete('cascade');
        $table->string('name');
        $table->string('email');
        $table->text('content');
        $table->enum('status', ['approved', 'pending'])->default('pending');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
