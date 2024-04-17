<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linkterkait extends Model
{
    use HasFactory;
    public $table = "linkterkaits";
    protected $fillable = [
        'link','image'
    ];
}
