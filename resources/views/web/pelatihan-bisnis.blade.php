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
                    <img src="{{ asset('img') }}/web/pelatihan-bisnis-dan-manajemen-bpvp-sorong-1.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Bisnis Dan Manajemen</h2>
                    <blockquote>
                        Bisnis dan manajemen merupakan Kejuruan yang membekali siswa pelatihan dengan kemampuan dalam bidang mengelola administrasi, manajemen perkantoran, melakukan komunikasi, mengelola keuangan, melakukan aktivitas penjualan dan layanan dengan kualitas dan kuantitas yang ditentukan sesuai SOP.
                    </blockquote>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-bisnis-dan-manajemen-bpvp-sorong-2.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Junior Administrasi Assistant</h2>
                    <blockquote>
                        Lama Pelatihan 220 jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah menyelesaikan program pelatihan ini, siswa kompeten dalam melakukan pekerjaan office administrative assistant yang berkaitan dengan komunikasi, korespondensi, kerjasama dengan kolega dan pelanggan sesuai dengan standar yang berlaku di perusahaan.
                        </p>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-bisnis-dan-manajemen-bpvp-sorong-3.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Pengelola Administrasi Perkantoran</h2>
                    <blockquote>
                        Lama Pelatihan 220 jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah menyelesaikan program pelatihan ini, siswa kompeten dalam melakukan pekerjaan administrasi dengan menggunakan peralatan dan perlangkapan kantor serta mampu berkomunikasi dengan berpedoman pada etika perkantoran di tempat kerja.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection