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
        Schema::create('laporansaber', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('email');
            $table->string('no_hp');
            $table->date('tanggal');
            $table->string('alamat');
            $table->text('pengaduan');
            $table->enum('status', ['Belum Dibalas', 'Sudah Dibalas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporansaber');
    }
};