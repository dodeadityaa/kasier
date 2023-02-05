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
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>Input Barang</title>
    <!-- Custom CSS -->
    <link href="/indexcss/css/style.min.css" rel="stylesheet">
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
                    <h6 class="page-title text-truncate text-dark font-weight-medium mb-1">Input Data Barang</h6>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Input Data Barang</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Notif -->
                    @if(session('suksesssss'))
                    <div class="alert alert-success" role="alert">
                        Kategori Berhasil Dibuat !!!
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
                    @if(session('failed'))
                    <div class="alert alert-danger" role="alert">
                        Kategori Tidak Bisa Dibuat !!!
                    </div>
                    @endif
                    <!-- Notif -->
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
            <form action="{{ route('barang-view.update',$barangg->id) }}" method="post">
                {{csrf_field()}}
                {{method_field("PUT")}}
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="card">
                            <!-- Isi Konten  -->
                            <div class="card-body">
                                <h6 class="card-title"> Kode Barang</h6>
                                <div class="form-group">
                                    <input type="hidden" name="id_barang" class="form-control" id="id_barang" value="{{ $barangg->id }}">
                                    <input type="text" id="kode_barang" name="kode_barang" class="form-control" placeholder="Kode Barang" value="{{ $barangg->kode_barang }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"> Nama Barang</h6>
                                <div class="form-group">
                                    <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $barangg->nama_barang }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"> Kategori Barang</h6>
                                <div class="row">
                                    <select class="form-control col-sm-12" id="kategori_barang" name="kategori_barang" id="kategori_barang">
                                        <option value="">Masukan Kategori Barang</option>
                                        @foreach($categorii as $cate)
                                        @if($cate->id == $barangg->id_kategori )
                                        <option value="{{ $cate->id }}" selected>{{ $cate->kategori }}</option>
                                        @else
                                        <option value="{{ $cate->id }}">{{ $cate->kategori }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="card-body">
                                <h6 class="card-title"> Harga Jual</h6>
                                <div class="form-group">
                                    <input type="number" id="harga_jual" name="harga_jual" class="form-control" placeholder="harga jual" value="{{ $barangg->harga_jual }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"> Harga Beli</h6>
                                <div class="form-group">
                                    <input type="number" id="harga_beli" name="harga_beli" class="form-control" placeholder="harga beli" value="{{ $barangg->harga_beli }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"> Stok Obat</h6>
                                <div class="form-group">
                                    <input type="number" id="stock_barang" name="stock_barang" class="form-control" placeholder="Stok Barang" value="{{ $barangg->stock_barang }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <center>
                                    <a href="{{ route('barang-view.index') }}" class="col-sm-2 col-md-4 col-lg-2 btn waves-effect waves-light btn-rounded btn-danger">Kembali</a>
                                    <button type="submit" class="col-sm-2 col-md-4 col-lg-2 btn waves-effect waves-light btn-rounded btn-primary" name="simpan"> Simpan</button>
                                </center>
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
    <script src="/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- apps -->
    <script src="/indexcss/js/app.min.js "></script>
    <script src="/indexcss/js/app.init-menusidebar.js"></script>
    <script src="/indexcss/js/app-style-switcher.js "></script>
    <script src="/indexcss/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js "></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js "></script>
    <!-- theme js -->
    <!--Menu sidebar -->
    <script src="/indexcss/js/sidebarmenu.js "></script>
    <!--Custom JavaScript -->
    <script src="/indexcss/js/custom.min.js "></script>
</body>

</html>