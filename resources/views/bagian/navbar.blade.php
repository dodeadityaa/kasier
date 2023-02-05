<aside class="left-sidebar print-data" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar print-data" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav print-data">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('dashboard-view.index') }}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>

                <li class="list-divider print-data"></li>
                </li>
                <!-- <li class="sidebar-item "> <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Tables </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="../view/viewkaryawan.php" class="sidebar-link"><span class="hide-menu"> Karyawan
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="../view/viewobat.php" class="sidebar-link"><span class="hide-menu"> Obat
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="../view/viewsupplier.php" class="sidebar-link"><span class="hide-menu"> Supplier
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="../view/viewpelanggan.php" class="sidebar-link"><span class="hide-menu"> Pelanggan
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="../view/viewtransaksi.php" class="sidebar-link"><span class="hide-menu"> Transaksi
                                </span></a>
                        </li>
                    </ul>
                </li> -->

                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('user-view.index') }}" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        <span class=" hide-menu">Akun</span></a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('barang-view.index') }}" aria-expanded="false">
                        <i class="fa fa-archive"></i>
                        <span class=" hide-menu">Barang</span></a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('kasir-view.index') }}" aria-expanded="false">
                        <i class="fa fa-cart-plus"></i>
                        <span class=" hide-menu">Kasir</span></a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../login/register.php" aria-expanded="false">
                        <i class="fa fa-university"></i>
                        <span class=" hide-menu">Transaksi</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" aria-expanded="false">
                        <i data-feather="log-out" class="feather-icon"></i>
                        <span class="hide-menu">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->