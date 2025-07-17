<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('summary')->nullable();
            $table->string('image', 255)->nullable();
            $table->integer('stok');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();

            // Foreign key
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('books');
    }
};
