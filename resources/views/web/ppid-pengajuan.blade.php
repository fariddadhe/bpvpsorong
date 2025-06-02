@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Pengajuan Keberatan</h1>
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
                    <img src="{{ asset('img') }}/web/ppid-pengajuan-keberatan-bpvp-sorong.jpg" alt="Gedung BPVP Sorong" style="margin: 0px 0 30px 0;">
                </div>
                <div class="col-md-6 about-info">
                    <h2>Formulir Pengajuan Keberatan Informasi</h2>
                    <blockquote>
                        Klik Isi Formulir Online atau download e-formulir dan lengkapi sesuai dengan ketentuan yang tertera, kemudian kirimkan melalui email ke <strong>blksorong@kemnaker.go.id</strong> apabila mengalami kendala silahkan hubungi kami melalui kontak yang tertera.
                    </blockquote>

                    <div class="col-md-12">
                            <a href="https://forms.gle/oz4tN6V5aJjryu5F6" target="_blank">
                                <button style="padding: 10px 20px">Isi Formulir Online</button>
                            </a>
                            <a href="https://drive.google.com/file/d/10MSI4nd9o2Q55fjkDd8m_kj8teqKqTgh/view" target="_blank">
                                <button style="padding: 10px 20px">Download E-Formulir</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection