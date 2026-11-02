<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;


class BeritaController extends Controller
{
    public function show($slug)
    {
        // Mengambil berita yang sudah terbit berdasarkan slug
        $berita = Berita::where('slug', $slug)
            ->where('status', 'terbit')
            ->firstOrFail();

        $beritaLainnya = Berita::where('status', 'terbit')
            ->where('slug', '!=', $slug)
            ->latest('tanggal_berita')
            ->take(5)
            ->get();

        // Menampilkan halaman detail berita
        return view('web.berita', [
            'title' => $berita->judul,
            'berita' => $berita,
            'beritaLainnya' => $beritaLainnya
        ]);
    }
}
