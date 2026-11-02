<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $table = 'pelatihan';

    protected $fillable = ['kejuruan_id', 'kategori_id', 'nama', 'durasi', 'deskripsi', 'gambar'];

    public function kejuruan()
    {
        return $this->belongsTo(Kejuruan::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
