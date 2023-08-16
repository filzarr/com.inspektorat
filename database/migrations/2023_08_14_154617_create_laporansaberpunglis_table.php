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
        Schema::create('laporansaberpunglis', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('identitas');
            $table->string('nohp');
            $table->string('email');
            $table->text('deskripsi');
            $table->text('balasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporansaberpunglis');
    }
};
