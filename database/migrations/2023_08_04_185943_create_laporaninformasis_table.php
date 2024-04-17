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
        Schema::create('laporaninformasis', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama');
            $table->enum('kategori', ['perorangan', 'kelompok', 'LSM/NGO', 'instansi pemerintah', 'lembaga pendikan', 'lainnya']);
            $table->string('alamat');
            $table->string('identitas');
            $table->string('nohp');
            $table->string('email');
            $table->enum('metode', ['Melihat/Mendengar/Membaca/Mencatat', 'Mendapat Salinan Informasi(SoftCopy/HardCopy)']);
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
        Schema::dropIfExists('laporaninformasis');
    }
};
