@extends('dashboard.master')

@section('konten')

<!-- start page title -->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Selamat Datang !</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dasbor</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Siswa</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="1342">800</span>
                                </h4>
                            </div>

                            <div class="flex-shrink-0 text-end dash-widget">
                                <div id="mini-chart1" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Siswa Aktif</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="256">120</span>
                                </h4>
                                
                            </div>
                            <div class="flex-shrink-0 text-end dash-widget">
                                <div id="mini-chart2" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Jumlah Lulusan</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="1237">0</span>
                                </h4>
                            </div>
                            <div class="flex-shrink-0 text-end dash-widget">
                                <div id="mini-chart3" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Sertifikasi BNSP</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="872">500</span>
                                </h4>
                            </div>
                            <div class="flex-shrink-0 text-end dash-widget">
                                <div id="mini-chart4" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->    
        </div><!-- end row-->

        <div class="row">
            <div class="col-xl-8">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Indeks Penilaian</h5>
                            <div class="ms-auto">
                                <div>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        Kepribadian
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        Teori
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        Pratik
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div>
                                    <div id="market-overview" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="p-4">
                                    <div class="mt-0">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                    1
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-14">Bahasa</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                    2
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-14">Sikap</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                    3
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-14">Kedisiplian</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                    4
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-14">Kejujuran</span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                    5
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-14">Kreativitas</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="" class="btn btn-primary w-100">Tampilkan Semua<i
                                                class="mdi mdi-arrow-right ms-1"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row-->

            <div class="col-xl-4">
                <!-- card -->
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Instruktur</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">Semua<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
        
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#">Semua</a>
                                    <a class="dropdown-item" href="#">Teknik Listrik</a>
                                    <a class="dropdown-item" href="#">Teknik Las</a>
                                    <a class="dropdown-item" href="#">Pariwisata</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body px-0">
                        <div class="px-3" data-simplebar style="max-height: 386px;">
                            <div class="d-flex align-items-center pb-4">
                                <div class="avatar-md me-4">
                                    <img src="./assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Randy Matthews</a></h5>
                                    <span class="text-muted">Randy@gmail.com</span>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center pb-4">
                                <div class="avatar-md me-4">
                                    <img src="./assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Vernon Wood</a></h5>
                                    <span class="text-muted">Vernon@gmail.com</span>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center pb-4">
                                <div class="avatar-md me-4">
                                    <img src="./assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Howard Rhoades</a></h5>
                                    <span class="text-muted">Howard@gmail.com</span>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center pb-4">
                                <div class="avatar-md me-4">
                                    <img src="./assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Arthur Zurcher</a></h5>
                                    <span class="text-muted">Arthur@gmail.com</span>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center pb-4">
                                <div class="avatar-md me-4">
                                    <img src="./assets/images/users/avatar-8.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Angela Palmer</a></h5>
                                    <span class="text-muted">Angela@gmail.com</span>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center pb-3">
                                <div class="avatar-md me-4">
                                    <img src="./assets/images/users/avatar-9.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Dorothy Wimson</a></h5>
                                    <span class="text-muted">Dorothy@gmail.com</span>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <div class="dropdown align-self-start">
                                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Copy</a>
                                            <a class="dropdown-item" href="#">Save</a>
                                            <a class="dropdown-item" href="#">Forward</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row-->

    <!-- container-fluid -->
</div>
<!-- End Page-content -->



@endsection