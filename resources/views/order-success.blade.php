<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Sukses</title>
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

    <div class="page-content page-order-success">
        <div class="container">
            <section class="order-success">
                <h1>
                    Pesanan Anda telah
                    kami Terima!
                </h1>
                <h2>
                    Selesaikan pembayaran Anda agar<br>
                    kami dapat memproses pesanan Anda
                </h2>
                <div class="container">
                    <a href="/user/transaction" class="btn btn-payment-confirmation">
                        Konfirmasi Pembayaran
                    </a>
                </div>
                <div class="container">
                    <a href="/products" class="btn btn-back-home">
                        Kembali belanja
                    </a>                    
                </div>

            </section>
        </div>
    </div>


    <script src="/reg/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/reg/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>