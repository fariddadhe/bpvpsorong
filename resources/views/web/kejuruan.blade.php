@extends('web.masterweb-isi')

@section('bread')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>{{ $kejuruan->nama }}</h1>
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
                    <img src="{{ $kejuruan->gambar ? asset('storage/' . $kejuruan->gambar) : asset('img/web/foto-gedung.jpg') }}" alt="{{ $kejuruan->nama }}" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>{{ $kejuruan->nama }}</h2>
                    <blockquote>
                        {{ $kejuruan->deskripsi }}
                    </blockquote>
                </div>
            </div>
        </div>
        <hr style="margin: 30px 0 60px 0;">

        @forelse ($pelatihan as $item)
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('img/web/pelatihan-foto.jpg') }}" alt="{{ $item->nama }}" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>{{ $item->nama }}</h2>
                    <blockquote>
                        Lama Pelatihan {{ $item->durasi }}
                        @if ($item->kategori)
                            <br>Kategori: {{ $item->kategori->nama }}
                        @endif
                    </blockquote>
                    <p>
                        {{ $item->deskripsi }}
                    </p>
                </div>
            </div>
        </div>
        @if (!$loop->last)
        <hr style="margin: 30px 0 60px 0;">
        @endif
        @empty
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Belum ada data pelatihan untuk kejuruan ini.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection