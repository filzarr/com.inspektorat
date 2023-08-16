<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporansaberpungli extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'alamat','identitas',
        'nohp','email',
        'deskripsi',
    ];
}
