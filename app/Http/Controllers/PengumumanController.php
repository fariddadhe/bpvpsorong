<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function show($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)
            ->where('status', 'aktif')
            ->firstOrFail();

        $pengumumanLainnya = Pengumuman::where('status', 'aktif')
            ->where('slug', '!=', $slug)
            ->latest('tanggal_pengumuman')
            ->take(5)
            ->get();

        // Menampilkan halaman detail pengumuman
        return view('web.pengumuman', [
            'title' => $pengumuman->judul,
            'pengumuman' => $pengumuman,
            'pengumumanLainnya' => $pengumumanLainnya
        ]);
    }
}
