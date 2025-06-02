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
                    <img src="{{ asset('img') }}/web/pelatihan-refrigration-bpvp-sorong-1.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Refrigration</h2>
                    <blockquote>
                        Kejuruan yang membekali siswa pelatihan dengan kemampuan dalam bidang pekerjaan Jasa perawatan dan pemeliharaan refrigerasi dan tata udara. Kejuruan Refrigration menyiapkan agar siswa pelatihan mampu melalukan kegiatan melakukan penanganan unit dan system refrigerasi dan tata udara, pemasangan, perbaikan dan perawatan system refrigerasi dan tata udara dengan kualitas dan kuantitas yang ditentukan sesuai SOP.
                    </blockquote>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-refrigration-bpvp-sorong-2.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Teknisi Air Conditioner Residential</h2>
                    <blockquote>
                        Lama Pelatihan 200 Jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah mengikuti pelatihan ini peserta akan kompeten dalam melakukan tugas perawatan dan perbaikan untuk unit refrigerasi domestik, meliputi memeriksa kebocoran refriger- an, melakukan proses brazing, melakukan pengisian refriger- an, mengganti komponen elektrik dan mekanik pada sistem refrigragrasi, menggunakan alat ukur refrigrasi.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection