@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Kios SIAP Kerja</h1>
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
                    <h2>Mudahkan Peserta Mencari Kerja</h2>
                    <blockquote>
                        Sistem Informasi Pasar Kerja dalam aplikasi SIAP Kerja merupakan layanan digital SIAP kerja yang terintegrasi pada empat pelayanan ketenagakerjaan secara digital, yaitu:
                    </blockquote>
                    <img src="{{ asset('img') }}/web/kios-siap-kerja-bpvp-sorong.jpg" alt="Kios SIAP Kerja">
                </div>
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/siapkerja-skillhub.jpg" width="200px" alt="SIAP Kerja">
                    <p>
                        Pertama adalah Skillhub, sebuah pelayanan yang mengkhususkan pada peningkatan kompetensi angkatan kerja Indonesia agar makin tinggi dan memenuhi kriteria kebutuhan tenaga kerja baik dari sektor industri maupun lainnya. Adapun skillhub meliputi skilling, reskilling, dan upskilling.
                    </p>
                    <img src="{{ asset('img') }}/web/siapkerja-sertihub.jpg" width="200px" alt="SIAP Kerja">
                    <p>
                        Kedua Sertihub, pelayanan sertifikasi ketenagakerjaan untuk standar kompetensi dengan kualitas yang terjamin untuk setiap pelatihan. Sertifikasi itu juga menjadi acuan baik untuk para pencari kerja dalam mengikuti pelatihan dan upskilling.
                    </p>
                    <img src="{{ asset('img') }}/web/siapkerja-karirhub.jpg" width="200px" alt="SIAP Kerja">
                    <p>
                        Ketiga Karirhub, menghubungkan para pencari kerja dengan pemberi kerja. Portal itu diharapkan menja- di jembatan efektif dalam rangka link and match ketenagakerjaan kompeten dan bersertifikat dengan pe- rusahaan yang membutuhkan calon pegawai.
                    </p>
                    <img src="{{ asset('img') }}/web/siapkerja-bizhub.jpg" width="200px" alt="SIAP Kerja">
                    <p>
                        Keempat Bizhub, untuk memberikan pelayanan kepada angkatan kerja yang mempunyai minat sebagai Tenaga Kerja Mandiri (TKM) dengan pelatihan bisnis, mentoring, jaringan usaha, dan pembiayaan modal usaha.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection