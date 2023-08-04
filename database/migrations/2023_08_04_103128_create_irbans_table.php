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
        Schema::create('irbans', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['profile','visi','misi','struktur']);
            $table->text('deskripsi')->nullable();
            $table->string('image')->nullable();
            $table->enum('irban', ['irban1','irban2','irban3','irban4','irbansus']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('irbans');
    }
};
