@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Visi & Misi BPVP Sorong</h1>
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
                    <h2>Visi 
                        <span>
                            Kementerian Ketenagakerjaan melaksanakan visi Presiden-Wakil Presiden Republik Indonesia Tahun 2020-2024 yaitu, "Indonesia Maju yang Berdaulat, Mandiri dan Berkepribadian berlandaskan Gotong Royong".
                        </span>
                    </h2>
                    <img src="{{ asset('img') }}/web/profil-visi-misi-bpvp-sorong.jpg" alt="Gedung BPVP Sorong" style="margin-bottom:40px;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Misi</h2>
                    <p>
                        Misi Kementerian Ketenagakerjaan melaksanakan Misi Presiden dan Wakil Presiden poin a, poin b, poin c, poin g, poin h dan poin i. Upaya yang dilakukan oleh Kementerian Ketenagakerjaan untuk mewujudkan visi dan misi Presiden dan Wakil Presiden Republik Indonesia Tahun 2020-2024 tersebut yaitu:
                    </p>
                    <blockquote>
                        1. Memberikan dukungan teknis dan administrasi serta analisis yang cepat, akurat dan responsive, kepada Presi den dan Wakil Presiden dalam pengambilan kebijakan penyelenggaraan pemerintah negara;
                    </blockquote>
                    <blockquote>
                        2. Menyelenggarakan pelayanan yang efektif dan efisien di bidang pengawasan, administrasi umum, informasi dan hubungan kelembagaan, dan berdaya saing.
                    </blockquote>
                    <blockquote>
                        3. Meningkatkan kualitas sumber daya manusia dan prasa rana Kementerian Ketenagakerjaan.
                    </blockquote>
                    <blockquote>
                        4. Perlindungan bagi segenap bangsa dan memberikan rasa aman pada seluruh warga.
                    </blockquote>
                    <blockquote>
                        5. Pengelolaan pemerintahan yang bersih, efektif, dan ter percaya.
                    </blockquote>
                    <blockquote>
                        6. Sinergi pemerintah daerah dalam kerangka negara kesatuan.
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection