@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Profil BPVP Sorong</h1>
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
                    <h2>Tentang Kami</h2>
                    <blockquote>
                        Balai Pelatihan Vokasi dan Produktivitas Sorong atau di singkat BPVP Sorong didirikan berdasarkan Permenaker No 1 Tahun 2022 tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis di Kementerian Ketenagakerjaan. 
                    </blockquote>
                        <p>
                            Balai Latihan Kerja Sorong yang selanjutnya disebut BLK Sorong telah berubah nama menjadi Balai Pelatihan Vokasi dan Produktivitas Sorong atau di singkat BPVP Sorong yang merupakan Unit Pelaksana Teknis Pusat (UPTP) Bidang Pelatihan Vokasi dan Produktivitas berada di bawah dan bertanggung jawab kepada Direktorat Jenderal Pembinaan Pelatihan Vokasi dan Produktivitas. 
                        </p>
                        <p>
                            BPVP Sorong didukng oleh instruktur yang berkualitas dengan latar belakang pendidikan S1 dan S2 serta mempunyai keahlian di bidang Teknik Las, Teknik Listrik, Manufaktur, Fashio Technology, TIK, Pariwisata, Konstruksi/Bangunan, Otomotive dan Pengolahan Hasil Pertanian.
                        </p>
                        <p>
                            Balai Pelatihan Vokasi dan Produktivitas Sorong merupakan Balai Pelatihan Vokasi dan Produktivitas Kelas I yang memiliki wilayah kerja dilima Provinsi yang diantaranya adalah Provinsi Papua dan Papua Barat, Papua Tengah, Papua Pegunungan, serta Papua Selatan.
                        </p>
                </div>
                <div class="col-md-6 features text-light">
                    <img src="{{ asset('img') }}/web/profil-tentang-gedung-bpvp-sorong.webp" alt="Gedung BPVP Sorong">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection