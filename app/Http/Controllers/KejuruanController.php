<?php

namespace App\Http\Controllers;

use App\Models\Kejuruan;

class KejuruanController extends Controller
{
    public function show($slug)
    {
        $kejuruan = Kejuruan::where('slug', $slug)->firstOrFail();
        $listkejuruan = Kejuruan::all();

        $pelatihan = $kejuruan->pelatihan;

        return view('web.kejuruan', [
            'title' => $kejuruan->nama,
            'kejuruan' => $kejuruan,
            'listkejuruan' => $listkejuruan,
            'pelatihan' => $pelatihan
        ]);
    }
}
