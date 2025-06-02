<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('halamanutama');
});

/* WEBSITE */

Route::get('/web', function () {
    return view('web.indexweb', [
        "title" => "Website Resmi BPVP Sorong"
    ]);
});

Route::get('/web/profil', function () {
    return view('web.profil-tentang', [
        "title" => "Profil"
    ]);
});

Route::get('/web/sejarah', function () {
    return view('web.profil-sejarah', [
        "title" => "Sejarah"
    ]);
});

Route::get('/web/visi-dan-misi', function () {
    return view('web.profil-visimisi', [
        "title" => "Visi & Misi"
    ]);
});
Route::get('/web/struktur-organisasi', function () {
    return view('web.profil-struktur', [
        "title" => "Struktur Organisasi"
    ]);
});



Route::get('/web/teknik-las', function () {
    return view('web.pelatihan-las', [
        "title" => "Teknik Las"
    ]);
});

Route::get('/web/teknik-listrik', function () {
    return view('web.pelatihan-listrik', [
        "title" => "Teknik Listrik"
    ]);
});

Route::get('/web/teknik-otomotif', function () {
    return view('web.pelatihan-otomotif', [
        "title" => "Teknik Otomotif"
    ]);
});

Route::get('/web/teknik-manufaktur', function () {
    return view('web.pelatihan-manufaktur', [
        "title" => "Teknik Manufaktur"
    ]);
});

Route::get('/web/teknik-elektronika', function () {
    return view('web.pelatihan-elektronika', [
        "title" => "Teknik Elektronika"
    ]);
});

Route::get('/web/kejuruan-tik', function () {
    return view('web.pelatihan-tik', [
        "title" => "Kejuruan Tik"
    ]);
});

Route::get('/web/kejuruan-processing', function () {
    return view('web.pelatihan-processing', [
        "title" => "Kejuruan Processing"
    ]);
});

Route::get('/web/kejuruan-pariwisata', function () {
    return view('web.pelatihan-pariwisata', [
        "title" => "Kejuruan Pariwisata"
    ]);
});

Route::get('/web/kejuruan-bangunan', function () {
    return view('web.pelatihan-bangunan', [
        "title" => "Kejuruan Bangunan"
    ]);
});

Route::get('/web/bisnis-dan-manajemen', function () {
    return view('web.pelatihan-bisnis', [
        "title" => "Bisnis & Manajemen"
    ]);
});

Route::get('/web/fashion-technology', function () {
    return view('web.pelatihan-fashion', [
        "title" => "Fashion Technology"
    ]);
});

Route::get('/web/tata-kecantikan', function () {
    return view('web.pelatihan-kecantikan', [
        "title" => "Tata Kecantikan"
    ]);
});

Route::get('/web/refrigration', function () {
    return view('web.pelatihan-refrigration', [
        "title" => "Refrigration"
    ]);
});





Route::get('/web/sertifikasi-lsp', function () {
    return view('web.layanan-sertifikasi', [
        "title" => "Sertifikasi LSP"
    ]);
});

Route::get('/web/kios-siap-kerja', function () {
    return view('web.layanan-kios', [
        "title" => "Kios SIAP Kerja"
    ]);
});

Route::get('/web/talent-corner', function () {
    return view('web.layanan-corner', [
        "title" => "Talent Corner"
    ]);
});

Route::get('/web/sistem-manajemen-mutu', function () {
    return view('web.layanan-mutu', [
        "title" => "Sistem Manajemen Mutu"
    ]);
});

Route::get('/web/kemitraan', function () {
    return view('web.layanan-kemitraan', [
        "title" => "Kemitraan Industri"
    ]);
});


Route::get('/web/maklumat-pelayanan', function () {
    return view('web.pelayanan-maklumat', [
        "title" => "Maklumat Pelayanan"
    ]);
});

Route::get('/web/standar-pelayanan', function () {
    return view('web.pelayanan-standar', [
        "title" => "Standar Pelayanan"
    ]);
});

Route::get('/web/alur-pelayanan', function () {
    return view('web.pelayanan-alur', [
        "title" => "Alur Pelayanan"
    ]);
});

Route::get('/web/survey-kepuasan-masyarakat', function () {
    return view('web.pelayanan-survey', [
        "title" => "Survey Kepuasan Masyarakat"
    ]);
});










Route::get('/web/pengumuman', function () {
    return view('web.informasi-pengumuman', [
        "title" => "Pengumuman"
    ]);
});

Route::get('/web/berita', function () {
    return view('web.informasi-berita', [
        "title" => "Berita"
    ]);
});

Route::get('/web/galeri', function () {
    return view('web.informasi-galeri', [
        "title" => "Galeri"
    ]);
});



Route::get('/web/ppid', function () {
    return view('web.ppid-tentang', [
        "title" => "PPID"
    ]);
});

Route::get('/web/permohonan-informasi', function () {
    return view('web.ppid-permohonan', [
        "title" => "Permohonan Informasi"
    ]);
});

Route::get('/web/pengajuan-keberatan', function () {
    return view('web.ppid-pengajuan', [
        "title" => "Pengajuan Keberatan"
    ]);
});


Route::get('/web/whistleblowing-system', function () {
    return view('web.pengaduan-wbs', [
        "title" => "Whistleblowing System"
    ]);
});


Route::get('/web/kontak', function () {
    return view('web.kontak', [
        "title" => "Kontak"
    ]);
});



/* DASHBOARD */


Route::get('/login', function () {
    return view('dashboard.login');
});

Route::get('/register', function () {
    return view('dashboard.register');
});

Route::get('/dashboard2', function () {
    return view('dashboard.index');
});
