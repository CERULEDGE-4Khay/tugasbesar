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
        Schema::create('chords', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama chord, misal A Major
            $table->string('type'); // 'Major' / 'Minor' / '7th' dll
            $table->string('image')->nullable(); // Path gambar chord
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chords');
    }
};
