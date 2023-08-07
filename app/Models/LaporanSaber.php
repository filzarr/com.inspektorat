<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanSaber extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelapor',
        'email',
        'no_hp',
        'tanggal',
        'alamat',
        'pengaduan',
    ];
}
