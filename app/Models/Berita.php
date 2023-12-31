<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'judul', 'created_at', 'deskripsi', 'image', 'slug'
    ];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
