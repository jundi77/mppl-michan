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

    <div class="page-content user-transaction">
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
                        <li class="breadcrumb-item active">Riwayat Pemesanan</li>
                    </ol>
                </nav>
                </div>
            </div>
            </div>
        </section> 

        <div class="container">
            <div class="main-body">
                <div class="row">
                    <!-- side bar -->
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
                    <!-- content -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                      <a class="nav-link active" href="#orderPending" data-toggle="tab">Menunggu Pembayaran</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#orderShipped" data-toggle="tab">Sedang Dikirim</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#orderFinish" data-toggle="tab">Selesai</a>
                                    </li>
                                </ul>

                                <!-- tab-content -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade-in active" id="orderPending">
                                        @foreach ($pesanan as $p)
                                        <div class="card card-body">
                                            <div class="row justify-content-between">
                                                <div class="col-lg-2">
                                                    <img src="/reg/images/pictures/alif-kemko.jpg" class="transc-img">
                                                </div>
                                                <div class="col-lg-4 ml-2">
                                                    <strong>{{  $p->Nama_Barang  }} - {{$p->Warna}} ({{$p->Ukuran}})</strong> <br>
                                                    Total: Rp<?php echo $p->Harga_Barang * $p->Jumlah; ?> <br>
                                                    Qty: {{$p->Jumlah}}
                                                </div>
                                                <div class="col-lg-1"></div>
                                                <div class="col-lg-4 text-center align-self-center">
                                                    Upload bukti transfer <br>
                                                    <button type="button" class="btn btn-upload" data-toggle="modal" data-target="#uploadBukti">
                                                        Upload
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="orderShipped">
                                        <div class="card card-body">
                                            <div class="row justify-content-between">
                                                <div class="col-lg-2">
                                                    <img src="/reg/images/pictures/alif-kemko.jpg" class="transc-img">
                                                </div>
                                                <div class="col-lg-4 ml-2">
                                                    <strong>Alif Kemko - Peanut (M)</strong> <br>
                                                    Total: Rp200.000 <br>
                                                    Qty: 1
                                                </div>
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-2 text-center align-self-center">
                                                    <button type="button" class="btn btn-upload" data-toggle="modal" data-target="#trackOrder">
                                                        Lacak
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="orderFinish">
                                        <div class="card card-body">
                                            <div class="row justify-content-between">
                                                <div class="col-lg-2">
                                                    <img src="/reg/images/pictures/alif-kemko.jpg" class="transc-img">
                                                </div>
                                                <div class="col-lg-4 ml-2">
                                                    <strong>Alif Kemko - Peanut (M)</strong> <br>
                                                    Total: Rp200.000 <br>
                                                    Qty: 1
                                                </div>
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-2 text-center align-self-center">
                                                    <p class="text-success">
                                                        Pesanan Selesai
                                                    </p>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row justify-content-end">
                                                <div class="col"></div>
                                                <div class="col text-right">
                                                    <button type="button" class="btn btn-receipt" data-toggle="modal" data-target="#review">
                                                        Beri Ulasan
                                                    </button>
                                                    <button type="button" class="btn btn-receipt" data-toggle="modal" data-target="#receipt">
                                                        Detail Transaksi
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->

    <!-- Upload Payment -->
    <div class="modal fade" id="uploadBukti" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlFile1">
                    Upload bukti transfer <br>
                    JPG/PNG, ukuruan max 1 MB
                  </label>
                  <input type="file" class="form-control-file">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Track order -->
    <div class="modal fade" id="trackOrder" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                @csrf
                <div class="form-group text-center">
                    <label for="noResi">Masukkan Nomor Resi</label>
                    <input class="form-control" id="noResi" type="text">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Receipt -->
      <div class="modal modal-transaction fade" id="receipt" tabindex="-1" role="dialog" >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Detail Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="container">
                    <div class="row">
                            <img class="ml-3" src="/reg/images/logo/logo_michan.png">
                    </div>
                    <hr/>
                    <strong>Status: <span class="text-success">Selesai</span>
                    </strong>
                    <div class="row transc-detail justify-content-between">
                        <div class="col-6">
                            No.invoice
                        </div>
                        <div class="col-6 text-right">
                            INV/20123/MPL/1940
                        </div>
                    </div> 
                    <div class="row transc-detail justify-content-between">
                        <div class="col-6">
                            Tanggal Pembelian
                        </div>
                        <div class="col-6 text-right">
                            23 Februari 2021
                        </div>
                    </div> 
                    <hr/>
                    <strong>Detail produk</strong> 
                    <div class="row transc-detail justify-content-between">
                        <div class="col-6">
                            Alif Kemko Peanut
                        </div>
                        <div class="col-3 text-right">
                            1 x
                        </div>
                    </div>
                    <strong>Rincian Pembayaran</strong>
                    <div class="row transc-detail justify-content-between">
                        <div class="col-6">
                            Subtotal
                        </div>
                        <div class="col-3 text-right">
                            179.000
                        </div>
                    </div>
                    <div class="row transc-detail justify-content-between">
                        <div class="col-6">
                            Ongkos kirim
                        </div>
                        <div class="col-3 text-right">
                            21.000
                        </div>
                    </div>
                    <hr/>
                    <div class="row transc-detail justify-content-between">
                        <div class="col-6">
                            Total
                        </div>
                        <div class="col-3 text-right">
                            200.000
                        </div>
                    </div>

                  </div>

              </div>
            </div>
          </div>
        </div>

     <!-- Receipt -->
     <div class="modal modal-transaction fade" id="review" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Ulasan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="/reg/images/pictures/alif-kemko.jpg" width="200px">
                    </div>
                    <div class="col-8">
                        <h2>Alif Kemko - Peanut</h2>
                        <h5>Penilaian</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        
                        <h5 class="mt-4">Komentar</h5>
                        <div class="form-group">
                            <textarea class="form-control" id="comment" rows="3"></textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn">Kirim</button>
            </div>
          </div>
        </div>
      </div>
     

    <script src="/reg/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/reg/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>