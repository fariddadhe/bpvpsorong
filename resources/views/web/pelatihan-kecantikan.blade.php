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
                    <img src="{{ asset('img') }}/web/pelatihan-tata-kecantikan-bpvp-sorong-1.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Tata Kecantikan</h2>
                    <blockquote>
                        Tata Kecantikan adalah kejuruan yang mempelajari tentang bidang kecantikan, mulai dari merias wajah, styling, dan treatment (perawatan) kulit maupun rambut. Prospek kerja lulusan Tata Kecantikan yaitu dapat berwira usaha dibidang kecantikan dengan membuka salon sendiri seperti MUA (Make Up Artist), selain itu dapat juga bekerja diindustri pertelevisian.
                    </blockquote>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ asset('img') }}/web/pelatihan-tata-kecantikan-bpvp-sorong-2.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Tata Kecantikan Kulit & Rambut</h2>
                    <blockquote>
                        Tata Kecantikan Kulit<br>
                        Lama Pelatihan 180 jam Pelatihan
                    </blockquote>
                    <blockquote>
                        Tata Kecantikan Rambut<br>
                        Lama Pelatihan 180 jam Pelatihan
                    </blockquote>
                        <p>
                            Hasil Pelatihan: Setelah mengikuti pelatihan ini peserta kompeten dalam pekerjaan menata kecantikan rambut tingkat dasar sesuai standar dan juga memperoleh pengetahuan dan sikap kerja di bidang tata kecantikan kulit.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection