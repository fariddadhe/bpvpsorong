<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Educom - Education & LMS Template">

    <!-- ========== Page Title ========== -->
    <title>{{ $title }} - BPVP Sorong</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('') }}favicon.ico" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('web-assets') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/themify-icons.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/animate.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/bootsnav.css" rel="stylesheet" />
    <link href="{{ asset('web-assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('web-assets') }}/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('web-assets') }}/js/html5/html5shiv.min.js"></script>
      <script src="{{ asset('web-assets') }}/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800" rel="stylesheet">
    <style>
            .wafixed {
            position: fixed;
            right: 30px;
            bottom: 30px;
            z-index: 999;
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        @include('web.navbarweb')

    </header>
    <!-- End Header -->

    
    <div class="spasi" style="background-color:#12547f; height:90px;"></div>
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{ asset('img') }}/web/breadcrumb.jpg);">
        @yield('bread')
    </div>

    
    @yield('konten')


    <a class="wafixed" href="https://wa.me/6282160631717" target="_blank">
        <img src="{{ asset('img') }}/web/whatsapp-bpvp-sorong.png" width="50px" alt="Hubungi WhatsApp BPVP Sorong">
    </a>

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        @include('web.footerweb')
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('web-assets') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/equal-height.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/jquery.appear.js"></script>
    <script src="{{ asset('web-assets') }}/js/jquery.easing.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/modernizr.custom.13711.js"></script>
    <script src="{{ asset('web-assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/wow.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/progress-bar.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/count-to.js"></script>
    <script src="{{ asset('web-assets') }}/js/YTPlayer.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/loopcounter.js"></script>
    <script src="{{ asset('web-assets') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('web-assets') }}/js/bootsnav.js"></script>
    <script src="{{ asset('web-assets') }}/js/main.js"></script>

</body>
</html>