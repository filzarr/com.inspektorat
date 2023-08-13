<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Laporankeberatan extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama','kategori',
        'alamat','identitas',
        'nohp','email',
        'metode','deskripsi',
    ];
}
