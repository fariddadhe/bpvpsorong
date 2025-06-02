@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Sejarah BPVP Sorong</h1>
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
                    <h2>Perjalanan Berdirinya <br>BPVP Sorong</h2>
                    <blockquote>
                        1971 Pembangunan pertama Pusat Pelatihan Kerja yang dikenal dengan nama Vocational Training Centre (VTC) di Irian Jaya.
                    </blockquote>
                    <img src="{{ asset('img') }}/web/profil-sejarah-banner.png" alt="Sejarah BPVP Sorong">
                </div>
                <div class="col-md-6 features">
                    <div class="semester-apply">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 item">
                                <img src="{{ asset('img') }}/web/profil-sejarah-tahun-1981.jpg" alt="Gedung BPVP Sorong Tahun 1981">
                            </div>
                            <div class="col-md-6 col-sm-6 item">
                                <h4>1981-1982</h4>
                                <p>
                                    Pembangunan pertama Gedung Pusat Latihan Kerja (PLK) dengan nama Balai Latihan kerja industri dan pertanian (BLKI).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="semester-apply">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 item">
                                <h4>1984</h4>
                                <p>
                                    Berdasarkan Peraturan Menteri Tenaga Kerja 181 tahun 1984 BLKIP berubah menjadi Latihan Kursus Kerja (KLK).
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-6 item">
                                <h4>1987</h4>
                                <p>
                                    Berdasarkan surat Keputusan Menteri No.88 tahun 1997 KLK berubah menjadi Loka Latihan Kerja Usaha Kecil dan Menengah (LLK-UKM)
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="semester-apply">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 item">
                                <h4>2001</h4>
                                <p>
                                    Keputusan Bupati Sorong Nomor 32 tahun 2001 berstatus sebagai Unit Pelayanan Teknis (UPT) di bawah Dinas Tenaga Kerja Kabupaten Sorong dengan sebutan BKI.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="semester-apply">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 item">
                                <img src="{{ asset('img') }}/web/profil-sejarah-tahun-2006.jpg" alt="Gedung BPVP Sorong tahun 2006">
                            </div>
                            <div class="col-md-6 col-sm-6 item">
                                <h4>2006</h4>
                                <p>
                                    Berdasarkan peraturan menteri ketenagakerjaan dan transmigras No.PER-06/MEN/3/2006 lembaga pelatihan ini ditetapkan sebagai salah satu pelaksana teknis di lingkungan kerja Departemen Tenaga kerja dan Transmigrasi dengan nama BLKI Sorong.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="semester-apply">
                        <div class="row">
                        <div class="col-md-6 col-sm-6 item">
                            <h4>2015</h4>
                            <p>
                                Berdasarkan Permenaker No. 21 Tahun 2015 BLK Sorong merupakan Pelaksana Teknis Bidang Pelatihan Kerja, Balai Latihan Kerja Kelas I.
                            </p>
                        </div>
                            <div class="col-md-6 col-sm-6 item">
                                <img src="{{ asset('img') }}/web/profil-sejarah-tahun-2015.jpg" alt="Gedung BPVP Sorong tahun 2015">
                            </div>
                        </div>
                    </div>
                    <div class="semester-apply">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 item">
                                <img src="{{ asset('img') }}/web/profil-sejarah-tahun-2022.jpg" alt="Gedung BPVP Sorong">
                            </div>
                            <div class="col-md-6 col-sm-6 item">
                                <h4>2022</h4>
                                <p>
                                    Berdasarkan Permenaker No. 1 Tahun 2022 BLK Sorong berubah nama menjadi Balai Pelatihan Vokasi dan Produktivitas (BPVP) Sorong.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection