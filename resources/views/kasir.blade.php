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
    <title>Kasir</title>
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
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h6 class="page-title text-truncate text-dark font-weight-medium mb-1">Kasir</h6>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Kasir</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <form action="" method="post">
                <br>

                <div class="pelanggans">
                    <table class="mt-3" cellpadding="10">
                        <tr>
                            <td>Tanggal Transaksi</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Penginput</td>
                            <td>:</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                    </table>
                </div>

                <div class="container">
                    <div class="row mt-5">
                        <table class="table table-bordered border-dark">
                            <thead>
                                <th scope="col1">Nama Obat</th>
                                <th scope="col1">Jumlah</th>
                                <th scope="col1">Harga Satuan</th>
                                <th scope="col1">Total Harga</th>
                            </thead>
                            <tbody>

                                <tr>
                                    <td colspan="3"><b style="float:right;">Grand Total</b></td>
                                    <td>
                                        <b>

                                        </b>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <!-- Input total bayar -->

                    <form action="" method="POST">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col4">
                                <input type="number" class="form-control mt3" name="bayar" placeholder="Masukan Jumlah Bayar">
                                <input type="submit" class="btn btn-warning mt-3 mb-5" value="Simpan Transaksi" name="simpan_transaksi">
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>

                    <!-- Simpan transaksi terakhir dan tampilkan detail bayar -->
                    <table class="table table-bordered border-dark">
                        <tr>
                            <td>Bayar</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Bayar</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kembali</td>
                            <td></td>
                        </tr>
                    </table>
                    <a href="../view/viewtransaksi"><input type="submit" class="btn btn-warning mt-3" value="Lihat Semua Transaksi"></a>






                    <!-- Input Obat -->
                    <div class="row">
                        <div class="col">
                            <div class="col-4">
                                <form action="" method="POST">
                                    <input list="list_obat" name="namaobat" class="form-control" placeholder="Masukan Nama Obat">
                                    <datalist id="list_obat">
                                    </datalist>
                                    <br>
                                    <input type="number" class="form-control mt=3" name="jumlah" placeholder="Jumlah">
                                    <br>
                                    <input type="submit" class="btn btn-warning" value="Masukan Obat" name="more">

                                    <a href="#" class="ml-1 btn btn-primary " onclick="window.print()"> Cetak Data </a>

                                    <input type="submit" class="btn btn-success" value="Selesai" name="finish">
                                </form>
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
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
    <div class="chat-windows "></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- apps -->
    <script src="indexcss/js/app.min.js "></script>
    <script src="indexcss/js/app.init-menusidebar.js"></script>
    <script src="indexcss/js/app-style-switcher.js "></script>
    <script src="indexcss/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js "></script>
    <script src="assets/extra-libs/sparkline/sparkline.js "></script>
    <!-- theme js -->
    <!--Menu sidebar -->
    <script src="indexcss/js/sidebarmenu.js "></script>
    <!--Custom JavaScript -->
    <script src="indexcss/js/custom.min.js "></script>
</body>

</html>