<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumuman';

    protected $fillable = [
        'judul',
        'konten',
        'slug',
        'tanggal_pengumuman',
        'gambar',
        'file_pdf',
        'status',
    ];

    protected $casts = [
        'tanggal_pengumuman' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($pengumuman) {
            $slug = Str::slug($pengumuman->judul);

            $existingSlug = Pengumuman::where('slug', $slug)->first();
            if ($existingSlug) {
                $slug .= '-' . time();
            }

            $pengumuman->slug = $slug;
        });

        static::updating(function ($pengumuman) {
            $slug = Str::slug($pengumuman->judul);

            $existingSlug = Pengumuman::where('slug', $slug)->where('id', '!=', $pengumuman->id)->first();
            if ($existingSlug) {
                $slug .= '-' . time();
            }

            $pengumuman->slug = $slug;
        });
    }
}
