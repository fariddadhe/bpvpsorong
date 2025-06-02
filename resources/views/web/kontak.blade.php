@extends('web.masterweb-isi')

@section('bread')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h1>Kontak Kami</h1>
        </div>
    </div>
</div>

@endsection

@section('konten')

<div class="contact-info-area default-padding">
    <div class="container">
        <!-- Start Contact Info -->
        <div class="contact-info text-center">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="info">
                            <h4>Telephone</h4>
                            <span>(0951) 324776</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <div class="info">
                            <h4>Alamat</h4>
                            <span>Jl. Basuki Rahmat, Sawagumu, Kota Sorong, <br>Papua Barat Daya - 98412</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="info">
                            <h4>Email</h4>
                            <span>blksorong@kemnaker.go.id</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Info -->
        
        <div class="row contact-bottom-info">
            <!-- Start Maps & Contact Form -->
            <div class="maps-form">
                <div class="col-md-6 maps">
                    <h4>Peta Lokasi</h4>
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19816.785845727118!2d131.31000782833982!3d-0.8847275361843562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d59551ae7aa7c67%3A0xc2cd2ac200090d52!2sBPVP%20%2F%20BLK%20Sorong!5e0!3m2!1sen!2sid!4v1699497112784!5m2!1sen!2sid"></iframe>
                    </div>
                </div>
                <div class="col-md-6 form">
                    <div class="heading">
                        <h4>Form Pertanyaan</h4>
                    </div>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nama Lengkap" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="No. Handphone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tulisakan Pertanyaan"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Kirim Pesan <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Maps & Contact Form -->

        </div>
    </div>
</div>

@endsection