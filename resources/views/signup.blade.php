<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Michan Hijab</title>
    <link rel="stylesheet" href="/reg/vendor/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/reg/styles/main.css">
    <style>
      body {
        background-image: url('/reg/images/pictures/flower.png');
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

    <div class="page-content page-auth">
        <div class="section-store-auth-sign-up">
            <div class="container">
                <h1>Daftar</h1>
                <form method="POST" action="#">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-5">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Alamat" name="alamat">
                      </div>

                    </div>
                    
                    <div class="form-row">                      
                      <div class="form-group col-md-5">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputCity">Kota</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Kota" name="kota">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Kode Pos</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="Kode pos" name="kodepos">
                      </div>
                    </div>

                    <div class="form-row">                      
                        <div class="form-group col-md-5">
                          <label for="inputNama">Nama Lengkap</label>
                          <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap" name="namalengkap">
                        </div>
                    </div>

                    <div class="form-row">                      
                        <div class="form-group col-md-5">
                          <label for="inputPassword4">No. HP</label>
                          <input type="text" class="form-control" id="inputNumber" placeholder="Nomor HP" name="nohp">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn">Daftar</button>
                  </form>
            </div>
        </div>
        
    </div>

    <script src="/reg/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/reg/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>