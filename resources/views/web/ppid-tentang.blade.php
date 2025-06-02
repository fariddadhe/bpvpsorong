@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Tentang PPID</h1>
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
                    <h2>PPID Pelaksana BPVP Sorong</h2>
                    <blockquote>
                        Sesuai dengan Undang-Undang Republik Indonesia Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik, BPVP Sorong membuat portal khusus agar publik lebih mudah mencari informasi yang dibutuhkan.
                    </blockquote>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                        <h3 style="margin: 0px 0 0px 0;">Informasi Tersedia Berkala</h3>
                        <p>
                            Informasi yang diperbaharui kemudian disediakan dan diumumkan kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.
                        </p>
                        <h3 style="margin: 30px 0 0px 0;">Informasi Setiap Saat</h3>
                        <p>
                            Informasi yang harus disediakan oleh Badan Publik dan siap tersedia untuk bisa langsung diberikan kepada Pemohon Informasi Publik ketika terdapat permohonan terhadap Informasi Publik tersebut.
                        </p>
                        <h3 style="margin: 30px 0 0px 0;">Informasi Serta Merta</h3>
                        <p>
                            Informasi yang berkaitan dengan hajat hidup orang banyak dan ketertiban umum dan wajib diumumkan secara serta merta tanpa penundaan.
                        </p>
                </div>
                <div class="col-md-6 about-info">
                        <img src="{{ asset('img') }}/web/pelatihan-foto.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection