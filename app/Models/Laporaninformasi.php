<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class Laporaninformasi extends Model
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama','kategori',
        'alamat','identitas',
        'nohp','email',
        'metode','deskripsi',
    ];
}
