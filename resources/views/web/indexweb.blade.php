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
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item mariner">
                        <a href="/web/teknik-las">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-unlink"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Teknik Las</h5>
                                    <p>
                                        Jumlah Lulusan <strong>144</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item casablanca">
                        <a href="/web/teknik-listrik">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-bolt"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Teknik Listrik</h5>
                                    <p>
                                        Jumlah Lulusan <strong>144</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item java">
                        <a href="/web/teknik-otomotif">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-car"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Teknik Otomotif</h5>
                                    <p>
                                        Jumlah Lulusan <strong>240</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item malachite">
                        <a href="/web/teknik-manufaktur">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-settings"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Teknik Manufaktur</h5>
                                    <p>
                                        Jumlah Lulusan <strong>64</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item mariner">
                        <a href="/web/teknik-elektronika">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-panel"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Teknik Elektronika</h5>
                                    <p>
                                        Jumlah Lulusan <strong>112</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item casablanca">
                        <a href="/web/kejuruan-tik">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-desktop"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Kejuruan TIK</h5>
                                    <p>
                                        Jumlah Lulusan <strong>208</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->

                <!-- End Single Item -->
                <!-- Single Item -->

                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item java">
                        <a href="/web/kejuruan-processing">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-server"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Kejuruan Processing</h5>
                                    <p>
                                        Jumlah Lulusan <strong>432</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item emerald">
                        <a href="/web/kejuruan-pariwisata">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-world"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Kejuruan Pariwisata</h5>
                                    <p>
                                        Jumlah Lulusan <strong>96</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item mariner">
                        <a href="/web/kejuruan-bangunan">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-ruler-alt-2"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Kejuruan Bangunan</h5>
                                    <p>
                                        Jumlah Lulusan <strong>176</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item brilliantrose">
                        <a href="/web/tata-kecantikan">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-crown"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Kejuruan Tata Kecantikan</h5>
                                    <p>
                                        Jumlah Lulusan <strong>160</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item casablanca">
                        <a href="/web/bisnis-dan-manajemen">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-bar-chart"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Bisnis dan Manajemen</h5>
                                    <p>
                                        Jumlah Lulusan <strong>160</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item brilliantrose">
                        <a href="/web/fashion-technology">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-palette"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Fashion Technology</h5>
                                    <p>
                                        Jumlah Lulusan <strong>256</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item emerald">
                        <a href="/web/refrigration">
                            <div class="item-box">
                                <div class="icon">
                                    <i class="ti-cloud"></i>
                                </div>
                                <div class="info">
                                    <h5>Pelatihan Refrigration</h5>
                                    <p>
                                        Jumlah Lulusan <strong>112</strong>
                                    </p>
                                    <span>Selengkapnya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('img') }}/web/berita-umum.jpg" alt="Thumb">
                            <div class="overlay">
                                <a href="#">
                                    <img src="{{ asset('img') }}/web/admin-bpvp-sorong.jpg" alt="Admin BPVP Sorong">
                                </a>
                                <ul>
                                    <li><i class="fas fa-calendar"></i>7 November 2023</li>
                                    <li><i class="fas fa-clock"></i>08:15</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="/web/pengumuman"><i class="ti-announcement"></i> Pengumuman</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="/web/pengumuman">Berikut List Jadwal Pelaksanaan Pelatihan Kejuruan Pariwisata BPVP Sorong Tahun Ajaran 2024</a>
                            </h4>
                            <p>
                                BPVP Sorong bersama dengan Badan Pendidikan dan Pelatihan Vokasi (BPVP) siap meluncurkan rangkaian pela...
                            </p>

                            <a class="btn btn-theme effect btn-sm tes" href="/web/pengumuman">Selengkapnya 
                                <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Single End Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('img') }}/web/berita-umkm.jpg" alt="Thumb">
                            <div class="overlay">
                                <a href="#">
                                    <img src="{{ asset('img') }}/web/admin-bpvp-sorong.jpg" alt="Admin BPVP Sorong">
                                </a>
                                <ul>
                                    <li><i class="fas fa-calendar"></i>2 November 2023</li>
                                    <li><i class="fas fa-clock"></i>16:24</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="/web/berita"><i class="ti-announcement"></i> Berita</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="/web/berita">Dorong Pertumbuhan Ekonomi, BPVP Sorong Gelar Bimbingan dan Produktivitas UMKM
                                    </a>
                            </h4>
                            <p>
                                Kepala Balai Pelatihan Vokasi dan Produktivitas (BPVP) Sorong Rahman Aryad secara resmi membuka bim...
                            </p>

                            <a class="btn btn-theme effect btn-sm tes" href="/web/berita">Selengkapnya 
                                <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Single End Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('img') }}/web/berita-bupati.jpg" alt="Thumb">
                            <div class="overlay">
                                <a href="#">
                                    <img src="{{ asset('img') }}/web/admin-bpvp-sorong.jpg" alt="Admin BPVP Sorong">
                                </a>
                                <ul>
                                    <li><i class="fas fa-calendar"></i>28 Oktober 2023</li>
                                    <li><i class="fas fa-clock"></i>11:39</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="/web/pengumuman"><i class="ti-announcement"></i> Pengumuman</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="/web/pengumuman">BPVP Umumkan Peserta Lolos dalam Tahapan Seleksi Untuk Pelatihan Kejuruan TIK</a>
                            </h4>
                            <p>
                                Pelatihan ini bertujuan untuk mempersiapkan generasi muda Papua dalam menghadapi tuntutan sektor pariwisata ya...
                            </p>

                            <a class="btn btn-theme effect btn-sm tes" href="/web/pengumuman">Selengkapnya 
                                <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Single End Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Popular Courses -->

<!-- Start Testimonials 
============================================= -->
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
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <i class="ti-comments"></i>
                        </div>
                        <div class="content">
                            <p>
                                Pelatihan BPVP di Sorong dalam bidang kejuruan pariwisata Papua sangat penting untuk mendukung pengembangan sektor pariwisata di daerah ini. Agar industri pariwisata di Sorong dan Papua secara keseluruhan dapat memanfaatkan potensi wisata alam dan budaya yang luar biasa yang dimiliki oleh wilayah ini.
                            </p>
                            <img src="{{ asset('img') }}/web/peserta-2.jpg" alt="Thumb">
                        </div>
                        <div class="author">
                            <h4>Siti Aisyah Putri</h4>
                            <span>Kejuruan Pariwisata</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <i class="ti-comments"></i>
                        </div>
                        <div class="content">
                            <p>
                                Saya sangat senang, ini juga sangat bagus apalagi teknik manufaktur BPVP Sorong menjadi inisiatif yang sangat positif. Ini akan membantu meningkatkan keterampilan teknis dan pengetahuan peserta, yang pada gilirannya dapat mendukung perkembangan sektor manufaktur di Papua.
                            </p>
                            <img src="{{ asset('img') }}/web/peserta-1.jpg" alt="Thumb">
                        </div>
                        <div class="author">
                            <h4>Bambang Susanto Wijaya</h4>
                            <span>Teknik Manufaktur</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <i class="ti-comments"></i>
                        </div>
                        <div class="content">
                            <p>
                                Pelatihan Bidang fashion technology di Papua merupakan langkah yang sangat relevan dan bermanfaat. Papua memiliki kekayaan budaya yang luar biasa, dan pengembangan industri fashion dengan memanfaatkan warisan budaya lokal dapat menjadi peluang besar.
                            </p>
                            <img src="{{ asset('img') }}/web/peserta-3.jpg" alt="Thumb">
                        </div>
                        <div class="author">
                            <h4>Dewi Permata Sari</h4>
                            <span>Fashion Technology</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
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