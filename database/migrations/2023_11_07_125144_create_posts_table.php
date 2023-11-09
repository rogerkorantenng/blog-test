<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\ColumnDefinition;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // Add this line
            $table->foreignId('category_id'); // Add this line
            $table->string('slug')->unique(); // Add this line
            $table->string('title'); // Add this line
            $table->string('excerpt'); // Add this line
            $table->text('body'); // Add this line
            $table->timestamps();
            $table->timestamp('published_at')->nullable(); // Add this line
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
