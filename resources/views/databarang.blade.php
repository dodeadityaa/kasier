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
    <title>Data Barang</title>
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
        <div class="page-breadcrumb print-data">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Barang</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="dashboard.php" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Table Barang</li>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Table Barang</h4>
                            <!-- Notif -->
                            @if(session('suksesssss'))
                            <div class="alert alert-success" role="alert">
                                Data Berhasil Di Buat !!!
                            </div>
                            @endif
                            <!-- Notif -->
                            <!-- Notif -->
                            @if(session('suksesedit'))
                            <div class="alert alert-success" role="alert">
                                Data Berhasil Di Ubah !!!
                            </div>
                            @endif
                            <!-- Notif -->
                            <!-- Notif -->
                            @if(session('deletee'))
                            <div class="alert alert-danger" role="alert">
                                Data Telah Di Hapus !!!
                            </div>
                            @endif
                            <!-- Notif -->
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-dark">
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori Barang</th>
                                        <th>Harga Jual</th>
                                        <th>Harga Beli</th>
                                        <th>Stok Barang</th>
                                        <th>Tombol Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barangs as $i => $item)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$item->kode_barang}}</td>
                                        <td>{{$item->nama_barang}}</td>
                                        <td>{{$item->kategoriModels->kategori}}</td>
                                        <td>{{$item->harga_jual}}</td>
                                        <td>{{$item->harga_beli}}</td>
                                        <td>{{$item->stock_barang}}</td>
                                        <td><a href="{{ route('barang-view.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                            <form action="{{ route('barang-view.destroy',$item->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data {{ $item->nama_barang }} ?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('barang-view.create') }}" class="btn btn-primary btn-rounded float-right">Input Barang</a>
                            <a href="#" class="ml-1 btn btn-primary btn-rounded float-right" onclick="window.print()"> Cetak Data </a>
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