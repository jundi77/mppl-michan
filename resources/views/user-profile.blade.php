<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun</title>
    <link rel="stylesheet" href="/reg/vendor/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/reg/styles/main.css">
    <style>
        body {
          background-image: url('/reg/images/pictures/flower-2.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="/reg/images/logo/logo_michan.png" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" 
             type="button" 
             data-toggle="collapse" 
             data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>             
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/products" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="/carts" class="nav-link">
                            <img class="d-none d-lg-block" src="/reg/images/icon/bag.svg" width="20px">
                            <span class="d-lg-none">Keranjang</span> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">
                            <img class="d-none d-lg-block" src="/reg/images/icon/person.svg" width="24px">
                            <span class="d-lg-none">Akun</span>
                        </a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-content user-profile">
        <!-- breadcrumbs -->
        <section
            class="store-breadcrumbs"
            data-aos="fade-down"
            data-aos-delay="100"
        >
            <div class="container">
            <div class="row">
                <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Biodata Diri</li>
                    </ol>
                </nav>
                </div>
            </div>
            </div>
        </section> 

        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <nav class="sidebar">
                                    <ul class="nav flex-column">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/user/profile"> Biodata Diri</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/user/transaction"> Riwayat Pemesanan </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/logout"> Keluar </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" class="form-control-plaintext" value="{{$user->Email_Pembeli}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama Lengkap</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control-plaintext" value="{{$user->Nama_Pembeli}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">No. HP</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control-plaintext" value="{{$user->NoHP_Pembeli}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Alamat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control-plaintext" value="{{$user->Alamat_Pembeli}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Kota</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control-plaintext" value="California">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Kode Pos</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control-plaintext" value="{{$user->PostCode}}">
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-9 text-secondary">
                                        <a href="/user-profile-edit.html" class="btn btn-edit">Edit</a>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/reg/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/reg/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>