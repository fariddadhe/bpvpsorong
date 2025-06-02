@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Galeri Foto</h1>
        </div>
    </div>
</div>

@endsection

@section('konten')

<div id="portfolio" class="portfolio-area default-padding">
    <div class="container">
        <div class="portfolio-items-area text-center">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <div class="row magnific-mix-gallery masonary text-light">
                        <div id="portfolio-grid" class="portfolio-items col-3">
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/galeri-1.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Pelatihan Peserta</p>
                                        <a href="{{ asset('img') }}/web/galeri-1.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/galeri-3.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Praktek Pengerjaan Motor</p>
                                        <a href="{{ asset('img') }}/web/galeri-3.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/galeri-2.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Makeup Model</p>
                                        <a href="{{ asset('img') }}/web/galeri-2.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/profil-sejarah-tahun-2022.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Gedung BPVP Sorong 2022</p>
                                        <a href="{{ asset('img') }}/web/profil-sejarah-tahun-2022.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/berita-umkm.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Pembukaan Pelatihan</p>
                                        <a href="{{ asset('img') }}/web/berita-umkm.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/profil-sejarah-tahun-1981.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Gedung BPVP Sorong 1981</p>
                                        <a href="{{ asset('img') }}/web/profil-sejarah-tahun-1981.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/foto-gedung.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Gedung BPVP Sorong Terbaru</p>
                                        <a href="{{ asset('img') }}/web/foto-gedung.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/berita-umum.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Pembukaan Pelatihan</p>
                                        <a href="{{ asset('img') }}/web/berita-umum.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/profil-sejarah-tahun-2006.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Gedung BPVP Sorong 2006</p>
                                        <a href="{{ asset('img') }}/web/profil-sejarah-tahun-2006.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/profil-sejarah-tahun-2015.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Gedung BPVP Sorong 2015</p>
                                        <a href="{{ asset('img') }}/web/profil-sejarah-tahun-2015.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="pf-item ceremony students">
                                <div class="item-effect">
                                    <img src="{{ asset('img') }}/web/berita-64.jpg" alt="thumb" />
                                    <div class="overlay">
                                        <p>Penerimaan Tamu</p>
                                        <a href="{{ asset('img') }}/web/berita-64.jpg" class="item popup-link">
                                            <i class="fa fa-eye"></i>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection