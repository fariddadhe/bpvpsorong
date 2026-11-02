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
        <h2>Detail Berita</h2>
        <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li>Berita</li>
        </ul>
    </div>
</div>

<div class="blog-area">
    <div class="container">
        <div class="row">
            <!-- Kolom Kiri - Detail Berita -->
            <div class="col-md-8">
                <div class="blog-content">
                    <div class="blog-header">
                        <h1>{{ $berita->judul }}</h1>
                        <div class="blog-meta">
                            <span><i class="fa fa-user"></i> {{ $berita->user?->name ?? 'Admin BPVP Sorong' }}</span>
                            <span><i class="fa fa-calendar"></i> {{ $berita->tanggal_berita->format('d F Y') }}</span>
                            <span><i class="fa fa-clock-o"></i> {{ $berita->tanggal_berita->format('H:i') }} WIB</span>
                        </div>
                    </div>

                    <!-- Gambar Berita -->
                    @if($berita->gambar)
                    <div class="featured-image">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                    </div>
                    @endif

                    <!-- Konten Berita -->
                    <div class="blog-text">
                        {!! $berita->konten !!}
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan - Sidebar untuk Kumpulan Berita -->
            <div class="col-md-4">
                <aside class="sidebar-item">
                    <div class="sidebar-title">
                        Berita Terbaru
                    </div>
                    <div class="sidebar-body">
                        @foreach ($beritaLainnya as $item)
                        <div class="side-post-item">
                            <div class="side-post-img">
                                <a href="{{ route('berita.show', ['slug' => $item->slug]) }}">
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Thumbnail">
                                    @else
                                        <img src="{{ asset('img/web/berita-umum.jpg') }}" alt="Thumbnail">
                                    @endif
                                </a>
                            </div>
                            <div class="side-post-info">
                                <h4>
                                    <a href="{{ route('berita.show', ['slug' => $item->slug]) }}" class="line-3">
                                        {{ Str::limit($item->judul, 60) }}
                                    </a>
                                </h4>
                                <div class="side-post-meta">
                                    <i class="fa fa-calendar"></i> {{ $item->tanggal_berita->format('d M Y') }}
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