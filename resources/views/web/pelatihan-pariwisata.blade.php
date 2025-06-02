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
                    <img src="{{ asset('img') }}/web/pelatihan-kejuruan-pariwisata-bpvp-sorong-1.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Kejuruan Pariwisata</h2>
                    <blockquote>
                        Kejuruan yang membekali siswa pelatihan mengenai penyediaan akomodasi hotel dan restoran yang menekankan pengetahuan, keterampilan dan sikap kerja dalam penguasaan secara teknis mengenai keahlian penyediaan akomodasi hotel dan restoran. Kejuruan Pariwisata menyiapkan agar siswa pelatihan mampu melalukan kegiatan mengelola produk kantor depan (front office), housekeeping, dan membuat produk minuman kopi sesuai dengan standar resep dengan kualitas dan kuantitas sesuai SOP.
                    </blockquote>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-kejuruan-pariwisata-bpvp-sorong-2.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Barista</h2>
                    <blockquote>
                        Lama Pelatihan 160 Jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah mengikuti pelatihan ini peserta akan kompeten dalam membuat produk minuman kopi sesuai dengan stan- dar resep, meliputi mengelola peralatan dan perlengkapan alat pembuata kopi, mengelola bahan baku dan mengem- bangkan produk minuman kopi.
                        </p>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-kejuruan-pariwisata-bpvp-sorong-3.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Room Attendant</h2>
                    <blockquote>
                        Lama Pelatihan 200 Jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah mengikuti pelatihan ini peserta akan kompeten dalam menyiapkan kamar untuk tamu dan menyediakan layanan housekeeping sesuai dengan standar operasional perusahaan.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection