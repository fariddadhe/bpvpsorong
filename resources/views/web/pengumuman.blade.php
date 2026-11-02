@extends('web.masterweb-isi')

@section('konten')

<!-- Custom CSS for this page -->
<style>
    .blog-area {
        padding: 50px 0;
        background-color: #f9f9f9;
    }
    .blog-content {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }
    .blog-header h1 {
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 15px;
        font-size: 28px;
    }
    .blog-meta {
        color: #777;
        font-size: 14px;
        margin-bottom: 25px;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }
    .blog-meta span {
        margin-right: 15px;
    }
    .blog-meta i {
        color: #007bff;
        margin-right: 5px;
    }
    .featured-image img {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 25px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .blog-text {
        color: #555;
        line-height: 1.8;
        font-size: 16px;
    }
    
    /* Sidebar Styling */
    .sidebar-item {
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        margin-bottom: 30px;
        position: sticky;
        top: 110px; /* Adjust based on navbar height */
    }
    .sidebar-title {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
        color: #2c3e50;
        position: relative;
    }
    .sidebar-title::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 50px;
        height: 2px;
        background: #007bff;
    }
    .side-post-item {
        display: flex;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f9f9f9;
        transition: all 0.3s ease;
    }
    .side-post-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }
    .side-post-item:hover {
        transform: translateX(5px);
    }
    .side-post-img {
        flex: 0 0 80px;
        margin-right: 15px;
    }
    .side-post-img img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 6px;
    }
    .side-post-info h4 {
        font-size: 15px;
        margin: 0 0 5px;
        line-height: 1.4;
    }
    .side-post-info h4 a {
        color: #333;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s;
    }
    .side-post-info h4 a:hover {
        color: #007bff;
    }
    .side-post-meta {
        font-size: 12px;
        color: #999;
    }
    
    /* PDF Section */
    .pdf-viewer-container {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 20px;
        margin-top: 30px;
    }
    .pdf-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
    }
    .pdf-header h4 {
        margin: 0;
        font-size: 18px;
        color: #d32f2f; /* PDF red color */
    }
    .btn-download {
        background-color: #d32f2f;
        color: #fff;
        padding: 8px 15px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.3s;
    }
    .btn-download:hover {
        background-color: #b71c1c;
        color: #fff;
    }
    
    /* Breadcrumb manual override since it's hidden in layout */
    .custom-breadcrumb {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset("img/web/breadcrumb.jpg") }}');
        background-size: cover;
        background-position: center;
        padding: 60px 0;
        color: #fff;
        text-align: center;
        margin-bottom: 0;
    }
    .custom-breadcrumb h2 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #fff;
    }
    .custom-breadcrumb ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .custom-breadcrumb ul li {
        display: inline;
        font-size: 16px;
    }
    .custom-breadcrumb ul li+li:before {
        content: "/\00a0";
        padding: 0 5px;
    }
    .custom-breadcrumb a {
        color: #fff;
        text-decoration: none;
    }
</style>

<!-- Manual Breadcrumb Section -->
<div class="custom-breadcrumb">
    <div class="container">
        <h2>Detail Pengumuman</h2>
        <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li>Pengumuman</li>
        </ul>
    </div>
</div>

<div class="blog-area">
    <div class="container">
        <div class="row">
            <!-- Kolom Kiri - Detail pengumuman -->
            <div class="col-md-8">
                <div class="blog-content">
                    <div class="blog-header">
                        <h1>{{ $pengumuman->judul }}</h1>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar"></i> {{ $pengumuman->tanggal_pengumuman->format('d F Y') }}</span>
                            <span><i class="fa fa-clock-o"></i> {{ $pengumuman->tanggal_pengumuman->format('H:i') }} WIB</span>
                        </div>
                    </div>

                    <!-- Gambar pengumuman -->
                    @if($pengumuman->gambar)
                    <div class="featured-image">
                        <img src="{{ asset('storage/' . $pengumuman->gambar) }}" alt="{{ $pengumuman->judul }}">
                    </div>
                    @endif

                    <!-- Konten pengumuman -->
                    <div class="blog-text">
                        {!! $pengumuman->konten !!}
                    </div>

                    @if($pengumuman->file_pdf)
                        <div class="pdf-viewer-container">
                            <div class="pdf-header">
                                <h4><i class="fa fa-file-pdf-o"></i> Lampiran Dokumen</h4>
                                <a href="{{ asset('storage/' . $pengumuman->file_pdf) }}" class="btn-download" target="_blank">
                                    <i class="fa fa-download"></i> Unduh PDF
                                </a>
                            </div>
                            <iframe src="{{ asset('storage/' . $pengumuman->file_pdf) }}" width="100%" height="600px" style="border: none; border-radius: 4px;">
                            </iframe>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Kolom Kanan - Sidebar untuk Kumpulan pengumuman -->
            <div class="col-md-4">
                <aside class="sidebar-item">
                    <div class="sidebar-title">
                        Pengumuman Terbaru
                    </div>
                    <div class="sidebar-body">
                        @foreach ($pengumumanLainnya as $item)
                        <div class="side-post-item">
                            <div class="side-post-img">
                                <a href="{{ route('pengumuman.show', ['slug' => $item->slug]) }}">
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Thumbnail">
                                    @else
                                        <img src="{{ asset('img/web/berita-umum.jpg') }}" alt="Thumbnail">
                                    @endif
                                </a>
                            </div>
                            <div class="side-post-info">
                                <h4>
                                    <a href="{{ route('pengumuman.show', ['slug' => $item->slug]) }}" class="line-3">
                                        {{ Str::limit($item->judul, 60) }}
                                    </a>
                                </h4>
                                <div class="side-post-meta">
                                    <i class="fa fa-calendar"></i> {{ $item->tanggal_pengumuman->format('d M Y') }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

@endsection