<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/adm/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/adm/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-primary" href="/">
                <div class="sidebar-brand-text mx-3"><img src="/adm/img/Logo/logo_michan.png" width="100%"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Kelola Produk -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin/kelola-produk">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Kelola Produk</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Nav Item - Kelola Status -->            
            <li class="nav-item">
                <a class="nav-link" href="/admin/kelola-status">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Kelola Status</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Nav Item - Laporan -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/laporan-penjualan">
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>Laporan Penjualan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="/adm/img-profile rounded-circle"
                                    src="/adm/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Penjualan (Daily) -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Penjualan (Harian)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Penjualan (Bulanan)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Visitor Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengunjung
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4" id="productTable">
                            <h1 class="h3 mb-0 text-gray-800">Kelola Produk</h1>
                            <a href="#" 
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                data-toggle="modal" data-target="#addProductModal"><i
                                    class="fas fa-plus fa-sm text-white-50"></i>Tambah Produk
                            </a>
                        </div>
                        
                        <!-- Product Tables -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tabel Produk</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Foto Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Kode Produk</th>
                                                <th>Inventory</th>
                                                <th>Status</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang as $b)
                                            <tr>
                                                <td><img src="/adm/img/product-detail-1.jpg" width="100px"></td>
                                                <td>{{ $b->Nama_Barang }}</td>
                                                <td>{{ $b->ID_Barang }}</td>
                                                <td>{{ $b->Inventory }}</td>
                                                <td>{{ $b->status }}</td>
                                                <td>                            
                                                    <a href="#" 
                                                    class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                                                    data-toggle="modal" data-target="#addProductModal"><i
                                                        class="fas fa-edit fa-sm text-black-50"></i>Edit
                                                    </a>
                                                    <form action="#" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$b->ID_Barang}}">
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Michan Hijab 2013</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img src="/adm/img/placeholder.png" width="200px">
                        </div>
                        <div class="col-8">
                            <h3>Detail Produk</h3>
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="productName">Nama Produk</label>
                                  <input type="text" class="form-control" id="productName" name="productName">
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">Harga Produk</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="number" class="form-control" id="productPrice" name="productPrice">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productName">Jumlah Barang</label>
                                    <input type="number" class="form-control" id="productPrice" name="amount">
                                </div>
                                <div class="form-group">
                                    <label for="productStatus">Status</label>
                                    <div class="custom-control custom-radio custom-control-inline ml-4">
                                        <input type="radio" id="in-stock" name="in-stock" class="custom-control-input">
                                        <label class="custom-control-label" for="in-stock">In-Stock</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="out-stock" name="out-stock" class="custom-control-input">
                                        <label class="custom-control-label" for="out-stock">Out-of-Stock</label>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="productName">Kode Produk</label>
                                    <input type="text" class="form-control" id="productCode" name="productCode" >
                                </div>
                                <div class="form-group">
                                    <label for="productDescription">Deskripsi Produk</label>
                                    <textarea class="form-control" id="productDescription" name="productDescription"  rows="3"></textarea>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                      <label for="productDescription">Warna</label>
                                      <input type="text" class="form-control" placeholder="State" name="color">
                                    </div>
                                    <div class="col">
                                      <label for="productDescription">Ukuran</label>
                                      <input type="text" class="form-control" placeholder="Zip" name="size">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <input class="btn btn-primary" type="submit" value="Submit">
                                  </div>
                            </form>
                        </div>
                    </div>                    
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/adm/vendor/jquery/jquery.min.js"></script>
    <script src="/adm/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/adm/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/adm/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/adm/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/adm/js/demo/chart-area-demo.js"></script>
    <script src="/adm/js/demo/chart-pie-demo.js"></script>

</body>

</html>