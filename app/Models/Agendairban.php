<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Agendairban extends Model
{
    use HasFactory; 
    protected $fillable = [
        'judul','created_at', 'deskripsi' ,'image','slug'
    ];
   
}
