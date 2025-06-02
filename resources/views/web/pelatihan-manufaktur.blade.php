@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Pelatihan</h1>
        </div>
    </div>
</div>

@endsection

@section('konten')

<div class="about-area default-padding">
    <div class="container">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-foto.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Teknik Manufaktur</h2>
                    <blockquote>
                        Kejuruan Teknik Manufaktur yang membekali siswa pelatihan dengan kemampuan dalam bidang keahlian pengoperasian mesin produksi (mesin bubut, mesin frasi, mesin bor, dll), CAD, pengoperasian mesin CNC, yang menekankan pengetahuan, keterampilan dan sikap kerja dalam penguasaan secara teknis mengenai keahlian manufaktur sehingga peserta kompeten membuat produk-produk manufaktur yang berkualitas sesuai dengan standar yang berlaku.
                    </blockquote>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-foto.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Drafter CAD Mekanikal</h2>
                    <blockquote>
                        Lama Pelatihan 220 Jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah mengikuti pelatihan ini peserta akan kompeten dalam membuat gambar teknik dengan menggunakan CAD (Computer Aided Drawing) yang meliputi persiapan piranti sistim CAD, pembuatan gambar-gambar 2D dan 3D, penyimpanan file serta pemanfaatan hasil gambar sesuai dengan tuntutan pekerjaan.
                        </p>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-foto.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Pengoperasian Mesin Produksi</h2>
                    <blockquote>
                        Lama Pelatihan 320 Jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah mengikuti pelatihan ini peserta akan kompeten dalam menggunakan mesin bubut dan mesin frais, gerinda, alat bantu/perkakas tangan, acuan gambar teknik, alat ukur yang benar, sesuai prosedur dan langkah kerja dan mengutamakan keselamatan kerja baik dirisendiri, alat maupun lingkungannya sehingga dapat membuat produk-produk manufaktur yang berkualitas.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection