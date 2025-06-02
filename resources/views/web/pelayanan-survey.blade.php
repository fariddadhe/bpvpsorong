@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Survey Kepuasan Masyarakat</h1>
        </div>
    </div>
</div>

@endsection

@section('konten')

<div class="about-area default-padding">
    <div class="container">
        <div class="row">
            <div class="about-items contact-bottom-info">
                <div class="col-md-2 form">
                </div>
                <div class="col-md-8 form">
                    <div class="heading" style="text-align: justify">
                        <!-- <h1>Kuisioner Survey Kepuasan Masyarakat</h1> -->
                        <p>
                        Balai Pelatihan Vokasi dan Produktivitas Sorong adalah UPTP dan merupakan salah satu Unit Pelayanan Publik Kementerian Ketenagakerjaan, sehingga berkewajiban melaksanakan penyelenggaraan pelayanan kepada publik dalam kurun waktu selama setahun dengan menggunakan indikator kinerja berdasarkan standar pelayanan. Pelaksanaan SKM berpedoman pada Permen PAN & RB Nomor : 14 Tahun 2017 tentang Pedoman Umum Penyusunan Survei Kepuasan Masyarakat Unit Penyelenggara Pelayanan Publik.
                        </p>
                        <p>
                        Terimakasih disampaikan kepada semua pihak yang telah berpartisipasi mengisi data SKM ini sebagai wujud penilaian terhadap pelayanan masyarakat yang diberikan Balai Pelatihan Vokasi dan Produktivitas Sorong sehingga dapat menjadi laporan sebagai bahan evaluasi yang dapat memberikan masukan bagi penyempurnaan kegiatan pelayanan publik pada bidang pelatihan dan lainnya di masa yang akan datang.
                        </p>
                    </div>
                    <!-- <form action="" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nama Lengkap*" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="No. Handphone*" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="kejuruan" name="kejuruan" placeholder="Kejuruan*" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap*" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="usia" name="usia" placeholder="Usia*" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="survey" name="survey" placeholder="Isi Survey*"></textarea>
                                </div>
                            </div>
                        </div> -->
                        <div class="btn-group" style="width:100%">
                                    <button type="submit" name="kirim" id="kirim">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf2vWVIDS9W1RAF-7AcY9PrUrYsPwfn03C1UtYzWrWhsioDqg/viewform?usp=sharing" target="_blank">Isi Survey</a>
                                    </button>
                                    <button type="submit" name="kirim" id="kirim">
                                        <a href="https://drive.google.com/drive/folders/1MIC-QGinf3zC7dwCThjMtwvZg8eRXpLO?usp=sharing" target="_blank">Hasil Survey</a>
                                    </button>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection