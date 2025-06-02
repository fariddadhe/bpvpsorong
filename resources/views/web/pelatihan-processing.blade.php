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
                    <img src="{{ asset('img') }}/web/pelatihan-kejuruan-processing-bpvp-sorong-1.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Kejuruan Processing</h2>
                    <blockquote>
                        Proses pengolahan adalah proses pembuatan bahan dari bahan mentah/segar menjadi produk-produk guna memenuhi kebutuhan manusia baik secara Fisik, Kimiawi maupun biokimiawi. Dengan teknik pengolahan di harapkan dapat memperoleh nilai tambah yang jauh lebih besar serta dapat menghasilkan produk-produk pertanian dari komuditas lokal. 
                    </blockquote>
                        <p>
                            Teknologi pengolahan hasil pertanian artinya memanfaatkan teknologi untuk mempermudah dan meningkatkan kualitas serta kuantitas pengolahan hasil pertanian. Fungsi pengolahan harus pula dipahami sebagai kegiatan strategis yang menambah nilai dalam mata rantai produksi dan menciptakan keunggulan kompetitif.
                        </p>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-kejuruan-processing-bpvp-sorong-2.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Pengolahan Roti dan Kue</h2>
                    <blockquote>
                        Lama Pelatihan 160 Jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah mengikutipelatihan ini peserta kompeten membuat produk pembuatan roti dan kue berkualitas,menggunakan mesin dan alat bantu/perkakas tangan,dengan acuan gambar teknik, alat ukur yang benar, sesuai prosedur langkah kerja, dan mengutamakan keselamatan kerja baik diri-sendiri, alat maupun lingkungannya.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection