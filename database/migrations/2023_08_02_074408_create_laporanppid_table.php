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
        Schema::create('laporanppid', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('email');
            $table->date('tanggal');
            $table->enum('kategori_ppid', ['Permohonan Informasi', 'Pengajuan Keberatan']);
            $table->text('laporan');
            $table->enum('status', ['Belum Dibalas', 'Sudah Dibalas']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporanppid');
    }
};
