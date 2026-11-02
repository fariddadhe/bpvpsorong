<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'konten',
        'slug',
        'tanggal_berita',
        'gambar',
        'status',
        'user_id'
    ];

    protected $casts = [
        'tanggal_berita' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($berita) {
            $slug = Str::slug($berita->judul);

            $existingSlug = Berita::where('slug', $slug)->first();
            if ($existingSlug) {
                $slug .= '-' . time();
            }

            $berita->slug = $slug;
        });

        static::updating(function ($berita) {
            $slug = Str::slug($berita->judul);

            $existingSlug = Berita::where('slug', $slug)->where('id', '!=', $berita->id)->first();
            if ($existingSlug) {
                $slug .= '-' . time();
            }

            $berita->slug = $slug;
        });
    }
}
