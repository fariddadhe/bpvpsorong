@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Whistleblowing System (WBS)</h1>
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
                        <!-- <h1>Selamat Datang di Whistleblowing System BPVP Sorong</h1> -->
                            <p>
                                kanal pengaduan ini disediakan bagi anda yang memiliki informasi atau laporan atas perbuatan berindikasi pelanggaran yang terjadi di lingkungan BPVP Sorong, dan memenuhi Kriteria pengaduan yaitu pelanggaran atau fraud sebagai berikut :
                                <li>
                                    Penyimpangan kode etik/perilaku dan Peraturan Kepegawaian
                                </li>
                                <li>
                                    Benturan kepentingan
                                </li>
                                <li>
                                    Kecurangan
                                </li>
                                <li>
                                    Korupsi
                                </li> 
                                <li>
                                    Pencurian
                                </li> 
                                <li>
                                    Penipuan
                                </li>
                                <li>
                                    Pemerasan
                                </li>
                                <li>
                                    Penggelapan
                                </li>
                                <li>
                                    Suap
                                </li>
                                <li>
                                    Gratifikasi yang dilarang
                                </li>
                            </p>
                            <p>    
                                Menjelaskan siapa, melakukan apa, kapan, dimana, mengapa, dan bagaimana Dilengkapi dengan bukti permulaan (data, dokumen, gambar dan rekaman) yang mendukung/menjelaskan adanya pelanggaran. Diharapkan dilengkapi dengan data sumber informasi untuk pendalaman.
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
                                        <a href="https://forms.gle/qmvtnJ2BJvqYtMcc7" target="_blank">Form Pengaduan</a>
                                    </button>
                                    <!-- <button type="submit" name="kirim" id="kirim">
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf2vWVIDS9W1RAF-7AcY9PrUrYsPwfn03C1UtYzWrWhsioDqg/viewform?usp=sharing">Hasil Survey</a>
                                    </button> -->
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