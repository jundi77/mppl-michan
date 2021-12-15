<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="/reg/vendor/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/reg/styles/main.css">
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
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/products" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item active">
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

    <div class="page-content page-cart">

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
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Keranjang
                    </li>
                    </ol>
                </nav>
                </div>
            </div>
            </div>
        </section> 

        <section class="store-cart">
            <div class="container">
                <!-- Cart -->
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table-borderless table-cart">
                            <thead>
                                <tr>
                                    <td>Produk</td>
                                    <td>Detail</td>
                                    <td>Jumlah</td>
                                    <td>Harga</td>
                                    <td>Opsi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_bayar = 0; ?>
                                @foreach ($carts as $c)
                                <?php $total_bayar += $c->Jumlah * $c->Harga_Barang; ?>
                                <tr>
                                    <td style="width: 25%;">
                                        <img src="/reg/images/pictures/product-details1.jpg" 
                                         class="cart-image">
                                    </td>
                                    <td style="width: 35%;">
                                        <div class="product-title">{{ $c->Nama_Barang  }}</div>
                                        <div class="product-subtitle">{{ $c->Warna  }}</div>
                                    </td>
                                    <td style="width: 25%;">
                                        <div class="product-title">{{  $c->Jumlah  }}</div>
                                    </td>
                                    <td style="width: 35%;">
                                        <div class="product-title">Rp<?php echo $c->Jumlah * $c->Harga_Barang; ?></div>
                                    </td>
                                    <td style="width: 20%;">
                                        <form action="#" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$c->ID_Barang}}">
                                            <input type="submit" class="btn btn-remove-cart" value="Remove">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Address Detail -->
                <div class="row">
                    <div class="col-12">
                        <hr />
                    </div>
                    <div class="col-12">
                        <h2 class="mb-4">Detail Pengiriman</h2>
                    </div>
                </div>
                <form action="/carts/order" method="post">
                    @csrf
                    <div class="form-row mb-2">
                        <div class="from-group col-md-6">
                            <label for="inputName">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputName" value="{{$user->Nama_Pembeli}}" required>
                        </div>
                        <div class="from-group col-md-6">
                            <label for="inputNumber">No. HP</label>
                            <input type="text" class="form-control" id="inputNumber" value="{{$user->NoHP_Pembeli}}" required>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="inputAddress">Alamat</label>
                                <input type="text" class="form-control" id=inputAddress value="{{$user->Alamat_Pembeli}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mb-2">
                            <div class="from-group col-md-6">
                                <label for="inputCity">Kota</label>
                                <input type="text" class="form-control" id="inputCity" value="California"" required>
                            </div>
                            <div class="from-group col-md-6">
                                <label for="inputZip">Kode Pos</label>
                                <input type="text" class="form-control" id="inputZip" value="{{$user->PostCode}}" required>
                            </div>
                    </div>
                    <!-- Payment Information -->
                    <div class="row">
                        <div class="col-12">
                            <hr />
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-4">Detail Pembayaran</h2>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-4">Metode Pembayaran</h2>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 e">
                            <table class="table table-price">
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>Rp{{$total_bayar}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ongkos Kirim</th>
                                        <td>21.000</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>Rp<?php echo $total_bayar + 21000; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5 align-self-start">
                           <div class="form-check">
                            <input class="form-check-input" name="payment" type="radio" id="via BCA" value="BCA">
                            <label class="form-check-label" for="viaBCA">
                                BANK BCA: 577-1-53-417 a.n <strong>MICHAN PERSADA</strong>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="payment" type="radio" id="viaMandiri"  value="Mandiri">
                            <label class="form-check-label" for="viaMandiri">
                                MANDIRI: 167-000-3368-692 a.n <strong>MICHAN PERSADA</strong>
                            </label>
                          </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <input type="submit" class="btn btn-check-out" value="Proses Order">
                    </div>
                </form>
                
            </div>
            </div>
        </section>
        
    <script src="/reg/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/reg/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>