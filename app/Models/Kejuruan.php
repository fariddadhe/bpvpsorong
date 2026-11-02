<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Kejuruan extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'kejuruan';

    protected $fillable = ['nama', 'deskripsi', 'gambar', 'jumlah_lulusan', 'slug'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama' // Gunakan nama sebagai dasar pembuatan slug
            ]
        ];
    }

    public function pelatihan()
    {
        return $this->hasMany(Pelatihan::class);
    }
}
