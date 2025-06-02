@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Talent Corner</h1>
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
                    <img src="{{ asset('img') }}/web/layanan-talent-corner-bpvp-sorong.webp" alt="Talent Corner BPVP Sorong">
                </div>
                <div class="col-md-6 about-info">
                    <h2>BPVP Sorong Memiliki Talent Corner</h2>
                    <blockquote>
                        Fasilitas ini digunakan untuk memberdayakan dan meningkatkan peran talenta muda. Talent Corner juga akan menjadi program yang memetakan talenta-talenta muda terutama di Kota Sorong hingga Provinsi Papua Barat Daya pada umumnya, sehingga dapat diberdayakan dan dikembangkan.
                    </blockquote>
                    <p>
                        Dalam implementasinya Talent Corner di dukung program Talent Hub. Talent Hub merupakan salah satu platform sistem informasi ketenagakerjaan dalam mendukung peningkatan produktivitas bagi talenta-talenta muda yang kreatif.
                    </p>
                    <p>
                        Dalam program Talent Hub ini, akan diberikan fasilitasi berupa pelatihan, mentoring, coaching dan pengembangan kewirausahaan di bidang digital dan digital creative, termasuk memberikan pengetahuan baru terkait Future Job melalui podcast. Melalui fasilitas ini, Kemnaker memiliki target melahirkan wirausaha baru di bidang digital dan creative digital.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection