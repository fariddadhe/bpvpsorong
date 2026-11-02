@extends('web.masterweb-isi')
@php
use Illuminate\Support\Str;
@endphp

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Berita Terbaru</h1>
        </div>
    </div>
</div>

@endsection

<style>
    .equal-height {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .equal-height .item {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .equal-height .info {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .img-fixed-size {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }
</style>


@section('konten')

<div class="popular-courses-area weekly-top-items default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="top-course-items">
                <!-- Single Item -->
                @forelse ($berita as $item)
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            @if ($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fixed-size">
                            @else
                                <img src="{{ asset('img/web/berita-umum.jpg') }}" alt="{{ $item->judul }}" class="img-fixed-size">
                            @endif
                            <div class="overlay">
                                <a href="#">
                                    <img src="{{ asset('img') }}/web/admin-bpvp-sorong.jpg" alt="Admin BPVP Sorong">
                                </a>
                                <ul>
                                    <li><i class="fas fa-calendar"></i>{{ $item->tanggal_berita->format('d F Y') }}</li>
                                    <li><i class="fas fa-clock"></i>{{ $item->tanggal_berita->format('H:i') }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="ti-announcement"></i> Berita</a>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="line-3">
                                <a href="{{ route('berita.show', ['slug' => $item->slug]) }}" class="line-3">{{ $item->judul }}</a>
                            </h4>

                            @php
                            $kontenBersih = preg_replace('/<figure.*?<\/figure>/s', '', $item->konten); // hapus gambar
                                $kontenBersih = strip_tags($kontenBersih); // hapus semua tag HTML
                                $kontenPreview = Str::limit($kontenBersih, 200); // ambil 200 karakter pertama
                                @endphp

                                <p class="line-3">
                                    {{ $kontenPreview }}
                                </p>

                                <a class="btn btn-theme effect btn-sm tes" href="{{ route('berita.show', ['slug' => $item->slug]) }}">Selengkapnya
                                    <i class="ti-angle-right"></i>
                                </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-md-12 text-center">
                    <p>Belum ada berita yang diterbitkan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection