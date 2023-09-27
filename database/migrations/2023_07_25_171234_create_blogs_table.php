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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('image');
            $table->string('slug');
            $table->unsignedBigInteger('category_id'); // Use unsignedBigInteger for foreign keys
            $table->text('description');
            $table->text('keywords');
            $table->text('meta_description');
            $table->timestamps();
        
            // Add foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
