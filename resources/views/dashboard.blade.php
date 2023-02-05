<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Kasir - Dashboard</title>
    <!-- Custom CSS -->
    <link href="indexcss/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    @include('bagian.header')
    @include('bagian.navbar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title text-center">Anda telah login sebagai {{ Auth::user()->name }}</h3>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-fluid" src="img/tampilan/Table user.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Keterangan :</h4>
                                    <p class="card-text"><b>Admin</b> : dapat Melihat,Mengedit dan Menghapus Data Akun.</p>
                                    <a href="{{ route('user-view.index') }}" class="btn btn-primary">Go Table Akun</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-fluid" src="img/tampilan/barang.png" height="1px" width="1px" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Keterangan :</h4>
                                    <p class="card-text"> <b>Admin</b> : dapat Melihat,Mengedit dan Menghapus Data Barang.</p>
                                    <a href="viewobat.php" class="btn btn-primary">Go Table Barang</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                        <!-- column -->
                        <!-- column -->
                        <div class="col-lg-4 col-md-6 img-fluid">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-fluid" src="img/tampilan/Kasir.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Keterangan :</h4>
                                    <p class="card-text"> <b> Admin dan Karyawan </b> : dapat Membuat Transaksi Kepada Pelanggan.</p>
                                    <a href="viewpelanggan.php" class="btn btn-primary">Go To Kasir</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Card -->
                            <div class="card">
                                <img class="card-img-top img-fluid" src="assets/images/big/Table Transaksi.png" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Keterangan :</h4>
                                    <p class="card-text"> <b>Admin</b> : dapat Melihat,Mengedit dan Menghapus Data Transaksi.</p>
                                    <p class="card-text"> <b>Karyawan</b> : Hanya Dapat Melihat Data Transaksi dan Detail Transaksi.</p>
                                    <a href="viewtransaksi.php" class="btn btn-primary">Go Table Transaksi</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('bagian.footer')
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="indexcss/js/app-style-switcher.js"></script>
    <script src="indexcss/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="indexcss/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="indexcss/js/custom.min.js"></script>
</body>

</html>