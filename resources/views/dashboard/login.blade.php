<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>BPVP SORONG | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dashboard-assets') }}/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{ asset('dashboard-assets') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('dashboard-assets') }}/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('dashboard-assets') }}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('dashboard-assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('dashboard-assets') }}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-sidebar-size="lg">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        



        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="/login" class="d-block auth-logo">
                                            <img src="assets/images/logo-sm.svg" alt="" height="28"> <span class="logo-txt">BPVP SORONG</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Login Form</h5>
                                            <p class="text-muted mt-2">Silahkan masukkan user dan password</p>
                                        </div>
                                        <form class="mt-4 pt-2" action="/dashboard">
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text" class="form-control" id="input-username" placeholder="Enter User Name">
                                                <label for="input-username">Username</label>
                                                <div class="form-floating-icon">
                                                   <i data-feather="users"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5" id="password-input" placeholder="Enter Password">
                                                
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                </button>
                                                <label for="input-password">Password</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </form>
                                        <div class="text-center">
                                            <p class="text-muted mb-0">Belum punya akun? <a href="/register"
                                                    class="text-primary fw-semibold">Daftar Disini</a> </p>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <a href="/" class="text-muted fw-semibold">
                                                <u>Kembali ke Halaman Utama</u>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> BPVP SORONG  - Developed by MailHB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="pt-md-5 p-4 d-flex" style="background-image: url(img/dashboard/foto-sambutan-login.jpg); height:100%; background-repeat: no-repeat; background-size: cover; background-position: center;">
                            
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-end">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                            
                                            
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>





        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('dashboard-assets') }}/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('dashboard-assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('dashboard-assets') }}/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('dashboard-assets') }}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('dashboard-assets') }}/libs/node-waves/waves.min.js"></script>
        <script src="{{ asset('dashboard-assets') }}/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="{{ asset('dashboard-assets') }}/libs/pace-js/pace.min.js"></script>

        
        <!-- apexcharts -->
        <script src="{{ asset('dashboard-assets') }}/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="{{ asset('dashboard-assets') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{ asset('dashboard-assets') }}/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <script src="{{ asset('dashboard-assets') }}/js/pages/allchart.js"></script>
        <!-- dashboard init -->
        <script src="{{ asset('dashboard-assets') }}/js/pages/dashboard.init.js"></script>

        <script src="{{ asset('dashboard-assets') }}/js/app.js"></script>

    </body>

</html>
