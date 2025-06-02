<!-- Start Navigation -->
<nav class="navbar navbar-default attr-border-none navbar-fixed navbar-transparent white bootsnav">

    <!-- Start Top Search -->
    <div class="container">
        <div class="row">
            <div class="top-search">
                <div class="input-group">
                    <form action="#">
                        <input type="text" name="text" class="form-control" placeholder="Search">
                        <button type="submit">
                            <i class="ti-search"></i>
                        </button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container">

        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="ti-search"></i></a></li>
            </ul>
        </div>        
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/web">
                <img src="{{ asset('img') }}/logo-bpvp-sorong-putih.png" class="logo logo-display" alt="Logo" height="100%" style="max-width: 250px">
                <img src="{{ asset('img') }}/logo-bpvp-sorong-biru.png" class="logo logo-scrolled" alt="Logo" height="100%" style="max-width: 250px">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="/web">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Profil</a>
                    <ul class="dropdown-menu">
                        <li><a href="/web/profil">BPVP Sorong</a></li>
                        <li><a href="/web/sejarah">Sejarah</a></li>
                        <li><a href="/web/visi-dan-misi">Visi & Misi</a></li>
                        <li><a href="/web/struktur-organisasi">Struktur Organisasi</a></li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pelatihan</a>
                    <ul class="dropdown-menu">
                        <li><a href="/web/teknik-las">Teknik Las</a></li>
                        <li><a href="/web/teknik-listrik">Teknik Listrik</a></li>
                        <li><a href="/web/teknik-otomotif">Teknik Otomotif</a></li>
                        <li><a href="/web/teknik-manufaktur">Teknik Manufaktur</a></li>
                        <li><a href="/web/teknik-elektronika">Teknik Elektronika</a></li>
                        <li><a href="/web/kejuruan-tik">Kejuruan TIK</a></li>
                        <li><a href="/web/kejuruan-processing">Kejuruan Processing</a></li>
                        <li><a href="/web/kejuruan-pariwisata">Kejuruan Pariwisata</a></li>
                        <li><a href="/web/kejuruan-bangunan">Kejuruan Bangunan</a></li>
                        <li><a href="/web/bisnis-dan-manajemen">Bisnis dan Manajemen</a></li>
                        <li><a href="/web/fashion-technology">Fashion Technology</a></li>
                        <li><a href="/web/tata-kecantikan">Tata Kecantikan</a></li>
                        <li><a href="/web/refrigration">Refrigration</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Layanan</a>
                    <ul class="dropdown-menu">
                        <li><a href="/web/sertifikasi-lsp">Sertifikasi LSP</a></li>
                        <li><a href="/web/kios-siap-kerja">Kios Siap Kerja</a></li>
                        <li><a href="/web/talent-corner">Talent Corner</a></li>
                        <li><a href="/web/sistem-manajemen-mutu">Manajemen Mutu</a></li>
                        <li><a href="/web/kemitraan">Kemitraan Industri</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pelayanan Publik</a>
                            <ul class="dropdown-menu">
                                <li><a href="/web/maklumat-pelayanan">Maklumat Pelayanan</a></li>
                                <li><a href="/web/standar-pelayanan">Standar Pelayanan</a></li>
                                <li><a href="/web/alur-pelayanan">Alur Pelayanan</a></li>
                                <li><a href="/web/survey-kepuasan-masyarakat">Survey Kepuasan Masyarakat</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >PPID</a>
                            <ul class="dropdown-menu">
                                <li><a href="/web/ppid">Tentang PPID</a></li>
                                <li><a href="/web/permohonan-informasi">Permohonan Informasi</a></li>
                                <li><a href="/web/pengajuan-keberatan">Pengajuan Keberatan</a></li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pengaduan</a>
                            <ul class="dropdown-menu">
                                <li><a href="https://www.lapor.go.id/">SP4N-LAPOR!</a></li>
                                <li><a href="/web/whistleblowing-system">Whistleblowing System</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Informasi</a>
                    <ul class="dropdown-menu">
                        <li><a href="/web/pengumuman">Pengumuman</a></li>
                        <li><a href="/web/berita">Berita Terbaru</a></li>
                        <li><a href="/web/galeri">Galeri Foto</a></li>
                    </ul>
                </li>
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >PPID</a>
                    <ul class="dropdown-menu">
                        <li><a href="/web/ppid">Tentang PPID</a></li>
                        <li><a href="/web/permohonan-informasi">Permohonan Informasi</a></li>
                        <li><a href="/web/pengajuan-keberatan">Pengajuan Keberatan</a></li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pengaduan</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.lapor.go.id/" target="_blank">SP4N-LAPOR!</a></li>
                        <li><a href="/web/whistleblowing-system">Whistleblowing System</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/web/kontak">Kontak</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!-- End Navigation -->