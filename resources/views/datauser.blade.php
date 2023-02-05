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
    <title></title>
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
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Akun</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="dashboard.php" class="text-muted">Home</a></li>
                                <li class="breadcrumb-item text-muted active" aria-current="page">Table Akun</li>
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
                            <h4 class="card-title"> Table Akun</h4>
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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#buatModal" data-whatever="@mdo">Daftar Akun</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-dark">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No. Telp.</th>
                                        <th>Level Pegawai</th>
                                        <th>Tombol Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $i => $item)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->username}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>{{$item->no_telp}}</td>
                                        <td>{{$item->level}}</td>
                                        <td><a href=# class="btn btn-success" id="edit-admin" data-toggle="modal" data-target="#editModal" data-id="{{ $item->id }}">Edit</a>
                                            <form action="{{ route('user-view.destroy', $item->id) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data {{ $item->name }} ?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                    <!-- Modal buat -->
                    <div class="modal fade" id="buatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('user-view.store') }}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="namee">Nama</label>
                                            <input type="name" class="form-control" id="name" name="name" aria-describedby="namee" placeholder="Masukan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="namee">username</label>
                                            <input type="name" class="form-control" id="username" name="username" aria-describedby="namee" placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="numberee">Number Telephone</label>
                                            <input type="number" class="form-control" id="no_telp" name="no_telp" aria-describedby="numberee" placeholder="Masukan Number Telephone">
                                        </div>
                                        <div class="form-group">
                                            <label>Level Pegawai</label>
                                            <select id="level" name="level" class="form-control input-lg dynamic67">
                                                <option>Masukan Level Pegawai</option>
                                                <option>Admin</option>
                                                <option>Karyawan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="paswordd">Password</label>
                                            <input type="password" class="form-control" id="password2" name="password3" placeholder="Masukan Password" value="{{ old('password') }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        <button type="submit" class="btn btn-primary">Buat</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal buat -->
                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('user-view.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{method_field("PUT")}}
                                    <div class="modal-body">
                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <label for="namee">Nama</label>
                                            <input type="hidden" name="id_admin" class="form-control" id="id_admin" value="{{ $item->id }}">
                                            <input type="name" class="form-control" id="name1" name="name" aria-describedby="namee" placeholder="Masukan Nama Admin" value="{{ old('name') }}" required>
                                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                        </div>
                                        <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                            <label for="namee">Username</label>
                                            <input type="name" class="form-control" id="username1" name="username" aria-describedby="namee" placeholder="Masukan Nama Admin" value="{{ old('username') }}" required>
                                            <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                                        </div>
                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email1" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required>
                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                        </div>
                                        <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                                            <label for="alamat">Alamat</label>
                                            <input type="alamat" class="form-control" id="alamat1" name="alamat" placeholder="Enter Alamat" value="{{ old('alamat') }}" required>
                                            <div class="invalid-feedback">{{ $errors->first('alamat') }}</div>
                                        </div>
                                        <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
                                            <label for="numberee">Number Telephone</label>
                                            <input type="number" class="form-control" id="no_telp1" name="no_telp" aria-describedby="numberee" placeholder="Masukan Number Telephone" value="{{ old('no_telp') }}" required>
                                            <div class="invalid-feedback">{{ $errors->first('no_telp') }}</div>
                                        </div>
                                        <div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
                                            <label>Level Pegawai</label>
                                            <select name="level" id="level1" name="level" class="form-control input-lg dynamic2">
                                                <option>Masukan Level Pegawai</option>
                                                <option>Admin</option>
                                                <option>Karyawan</option>
                                            </select>
                                            <div class="invalid-feedback">{{ $errors->first('level') }}</div>
                                        </div>
                                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                            <label for="paswordd">Password</label>
                                            <input type="password" class="form-control" id="password1" name="password" placeholder="Masukan Password" value="{{ old('password') }}" required>
                                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        <button type="submit" class="btn btn-primary">Perbarui</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Edit -->

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
    <!--script edit -->
    <script>
        $('body').on('click', '#edit-admin', function() {
            var admin_id = $(this).data('id');
            $.get('user-view/' + admin_id + '/edit', function(data) {
                $('#id_admin').val(data.id);
                $('#name1').val(data.name);
                $('#username1').val(data.username);
                $('#email1').val(data.email);
                $('#alamat1').val(data.alamat);
                $('#no_telp1').val(data.no_telp);
                $('#level1').val(data.level);
                $('#fotologin1').val(data.foto);
                $('#password1').val(data.password);
            })
        });
    </script>
    <!--script edit -->
</body>

</html>