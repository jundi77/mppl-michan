<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Status</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center bg-gradient-primary" href="index.html">
                <div class="sidebar-brand-text mx-3"><img src="/adm/img/Logo/logo_michan.png" width="100%"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Kelola Produk -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Kelola Produk</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Nav Item - Kelola Status -->            
            <li class="nav-item active">
                <a class="nav-link" href="status.html">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Kelola Status</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Nav Item - Laporan -->
            <li class="nav-item">
                <a class="nav-link" href="report.html">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" id="productTable">
                        <h1 class="h3 mb-0 text-gray-800">Kelola Status</h1>
                    </div>
                    
                    <!-- Product Tables -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Status</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Pemesanan</th>
                                            <th>ID Transaksi</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Packaging</th>
                                            <th>On-Delivery</th>
                                            <th>Arrived</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>23/02/2020</td>
                                            <td>12313</td>
                                            <td>
                                                <a href="#" 
                                                class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                                                data-toggle="modal" data-target="#paymentProofModal">Bukti
                                                </a></td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" id="statusPackaging" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" id="statusPOnDelivery" value="">
                                                </div>
                                            </td>
                                            <td>                            
                                                <div class="custom-control custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" id="statusArrived" value="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            <!-- End of Main Content -->
            </div>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Proof Modal -->
    <div class="modal fade" id="paymentProofModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-7">
                            <img src="/adm/img/bukti.jpg" width="400px" height="300px">
                        </div>
                        <div class="col-5 align-self-center text-center">
                            <p>
                                Email: user@gmail.com <br>
                                ID Transaksi: 12313 <br>
                                Tanggal: 23/02/2020
                            </p>
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Tolak</button>
                            <input class="btn btn-primary" type="submit" value="Konfirmasi">
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