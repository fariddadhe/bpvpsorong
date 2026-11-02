@extends('web.masterweb')

@section('konten')
<!-- Start Banner 
============================================= -->
<div class="banner-area">
    <div id="bootcarousel" class="carousel content-less text-light top-pad text-dark slide animate_text" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-zoom">
            <div class="item active bg-cover" style="background-image: url({{ asset('img') }}/web/hero1.jpg);">
                <div class="box-table" style="min-height: 550px;">

                </div>
            </div>
            <div class="item bg-cover" style="background-image: url({{ asset('img') }}/web/hero2.jpg);">
                <div class="box-table" style="min-height: 550px;">

                </div>
            </div>
            <div class="item bg-cover" style="background-image: url({{ asset('img') }}/web/hero3.jpg);">
                <div class="box-table" style="min-height: 550px;">

                </div>
            </div>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- End Banner -->

<!-- Start Features 
============================================= -->
<div class="features-area default-padding-bottom fixed bottom-less bg-color text-light">
    <div class="container">
        <div class="row">
            <div class="features">
                <div class="equal-height col-md-3 col-sm-6">
                    <div class="item mariner">
                        <a href="#kejuruan">
                            <div class="icon">
                                <i class="ti-crown"></i>
                            </div>
                            <div class="info">
                                <h4>Pelatihan</h4>
                                <p>
                                    Pelatihan berbasis kompetensi yang mengajarkan keterampilan teknis diharapkan mampu bersaing di pasar kerja dan hingga dapat berwirausaha.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="equal-height col-md-3 col-sm-6">
                    <div class="item brilliantrose">
                        <a href="#kejuruan">
                            <div class="icon">
                                <i class="ti-agenda"></i>
                            </div>
                            <div class="info">
                                <h4>Sertifikasi</h4>
                                <p>
                                    Seseorang yang telah didapatkan melalui pembelajaran, pelatihan, sehingga lulusan pelatihan dianggap kompeten dalam melakukan suatu pekerjaan.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="equal-height col-md-3 col-sm-6">
                    <div class="item casablanca">
                        <a href="#kejuruan">
                            <div class="icon">
                                <i class="ti-briefcase"></i>
                            </div>
                            <div class="info">
                                <h4>Penempatan</h4>
                                <p>
                                    Penempatan Kerja melalui layanan KIOS SIAP Kerja BPVP Sorong akan memberi info mengenai pasar kerja, bursa kerja yang ada pada forum jejaring industri.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="equal-height col-md-3 col-sm-6">
                    <div class="item malachite">
                        <a href="#kejuruan">
                            <div class="icon">
                                <i class="ti-flag-alt"></i>
                            </div>
                            <div class="info">
                                <h4>Kemitraan</h4>
                                <p>
                                    Forum Komunikasi Lembaga Pelatihan dan Industri (FKLPI) yang berfungsi sebagai jembatan atau wadah komunikasi antara Lembaga Pelatihan Kerja.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features -->

<!-- Start Daftar 
============================================= -->
<div class="join-us-area default-padding bottom-less bg-dark shape-theme text-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 single-item">
                <img src="{{ asset('img') }}/web/model-bpvp-sorong.webp" width="100%" style="margin: -30px 0 -60px 0;" alt="Model BPVP Sorong">
            </div>
            <div class="col-md-4 single-item" style="padding: 20px 20px 0 20px; margin-top:30px;">
                <h2>Kembangkan Skillmu!</h2>
                <p>
                    BPVP Sorong terus berupaya dalam mengembangkan kemampuan tiap peserta melalui pelatihan yang efektif dan berkualitas, jangan sampai ketinggalan, yuk daftarkan dirimu sekarang juga! GRATIS.
                </p>
                <a class="btn btn-light effect btn-md" href="https://account.kemnaker.go.id/register" target="_blank" style="margin-top: 10px;">Ikuti Pelatihan</a>
            </div>
        </div>
    </div>
</div>
<!-- End Features -->

<!-- Start Categories 
============================================= -->
<div id="kejuruan">
    <div class="category-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2" style="margin-top:110px;">
                        <h2>Daftar Pelatihan</h2>
                        <p>
                            BPVP Sorong menyelenggarakan Pelatihan berbasis kompetensi sebagai berikut:
                        </p>
                    </div>
                </div>
            </div>
            <div class="category-items">
                <div class="row">
                    @php
                        $cardColors = ['mariner', 'casablanca', 'java', 'malachite', 'mariner', 'casablanca', 'java', 'emerald', 'mariner', 'casablanca', 'brilliantrose', 'brilliantrose', 'emerald'];
                        $cardIcons = ['ti-unlink', 'ti-bolt', 'ti-car', 'ti-settings', 'ti-panel', 'ti-desktop', 'ti-server', 'ti-world', 'ti-ruler-alt-2', 'ti-bar-chart', 'ti-palette', 'ti-crown', 'ti-cloud'];
                    @endphp

                    @forelse ($kejuruan as $item)
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item {{ $cardColors[$loop->index % count($cardColors)] }}">
                                <a href="{{ route('kejuruan.show', ['slug' => $item->slug]) }}">
                                    <div class="item-box">
                                        <div class="icon">
                                            <i class="{{ $cardIcons[$loop->index % count($cardIcons)] }}"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Pelatihan {{ $item->nama }}</h5>
                                            <p>
                                                Jumlah Lulusan <strong>{{ $item->jumlah_lulusan }}</strong>
                                            </p>
                                            <span>Selengkapnya</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 text-center">
                            <p>Belum ada data kejuruan.</p>
                        </div>
                    @endforelse
                </div>
            </div>
<!-- End Categories -->

<!-- Start Popular Courses
============================================= -->
<div class="popular-courses-area bg-dark active-dots carousel-shadow weekly-top-items default-padding">
    <!-- Fidex BG -->
    <div class="fixed-bg" style="background-image: url({{ asset('web-assets') }}/img/bg.png);"></div>
    <!-- End Fidex BG -->
    <div class="container">
        <div class="row">
            <div class="site-heading text-light text-center">
                <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
                    <h2>Papan Informasi</h2>
                    <p>
                        Papan Informasi memuat berita terkini, pengumuman penting dan informasi terbaru terkait kegiatan yang dilaksanakan oleh BPVP Sorong, tentunya menjadi sumber informasi tepercaya.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="top-course-items courses-carousel owl-carousel owl-theme">
                    @foreach ($informasi as $item)
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            @if ($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" style="height: 250px; object-fit: cover; width: 100%;">
                            @else
                                <img src="{{ asset('img/web/berita-umum.jpg') }}" alt="{{ $item->judul }}" style="height: 250px; object-fit: cover; width: 100%;">
                            @endif
                            <div class="overlay">
                                <a href="{{ route($item->route_name, ['slug' => $item->slug]) }}">
                                    <img src="{{ asset('img') }}/web/admin-bpvp-sorong.jpg" alt="Admin BPVP Sorong">
                                </a>
                                <ul>
                                    <li><i class="fas fa-calendar"></i>{{ $item->date->format('d F Y') }}</li>
                                    <li><i class="fas fa-clock"></i>{{ $item->date->format('H:i') }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="{{ route($item->route_name, ['slug' => $item->slug]) }}"><i class="ti-announcement"></i> {{ $item->type }}</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="{{ route($item->route_name, ['slug' => $item->slug]) }}">{{ $item->judul }}</a>
                            </h4>
                            @php
                                $kontenBersih = preg_replace('/<figure.*?<\/figure>/s', '', $item->konten);
                                $kontenBersih = strip_tags($kontenBersih);
                                $kontenPreview = \Illuminate\Support\Str::limit($kontenBersih, 150);
                            @endphp
                            <p>
                                {{ $kontenPreview }}
                            </p>

                            <a class="btn btn-theme effect btn-sm tes" href="{{ route($item->route_name, ['slug' => $item->slug]) }}">Selengkapnya
                                <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Single End Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Popular Courses -->

<!-- Start Testimonials 
============================================= -->
@if($testimoni->count() > 0)
<div class="testimonials-area carousel-shadow active-dots bg-gray default-padding bg-cover" style="background-image: url({{ asset('web-assets') }}/img/shape-bg.png);">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
                    <h2>Testimoni Peserta</h2>
                    <p>
                        Peserta pelatihan merupakan bukti nyata kesuksesan program pelatihan kami, yang mencerminkan dampak positif pelatihan dalam pengembangan keterampilan dan peningkatan pengetahuan peserta.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-items testimonial-carousel owl-carousel owl-theme text-center">
                    @foreach($testimoni as $item)
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <i class="ti-comments"></i>
                        </div>
                        <div class="content">
                            <p>
                                {{ $item->isi }}
                            </p>
                            @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Thumb" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
                            @endif
                        </div>
                        <div class="author">
                            <h4>{{ $item->nama }}</h4>
                            <span>{{ $item->asal }}</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- End Testimonials -->

<div class="about-area default-padding-bottom">
    <div class="container" style="margin-top:10%;">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <h2>Video<span>Company Profile</span></h2>
                    <blockquote>
                        BPVP Sorong didukng oleh instruktur yang berkualitas dengan latar belakang pendidikan S1 dan S2 serta mempunyai keahlian di bidang Teknik Las, Teknik Listrik, Manufaktur, Fashio Technology, TIK, Pariwisata, Konstruksi/Bangunan, Otomotive dan Pengolahan Hasil Pertanian.
                    </blockquote>
                    <a class="btn circle btn-theme effect btn-md" href="https://account.kemnaker.go.id/register">Daftar Pelatihan</a>
                </div>
                <div class="col-md-6 thumb">
                    <div class="thumb">
                        <img src="{{ asset('img') }}/web/thumb-yt.jpg" alt="Thumb">
                        <a href="https://www.youtube.com/watch?v=B7Wcxu-4k9Q" class="popup-youtube light video-play-button">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection