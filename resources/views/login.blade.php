<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Michan Hijab</title>
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
        <div class="section-store-auth-login">
            <div class="container">
                <h1>Masuk</h1>
                <form action="#" method="POST">
                    @csrf
                    <div class="field-text">
                        <!-- email -->
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" 
                        placeholder="Email address" required="" autofocus="" name="email">
                    </div>
                    <div class="field-text">
                            <!-- password -->
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" 
                            placeholder="Password" required="" name="password">
                    </div>
                    <!-- <a class="btn" href="/">
                        Masuk
                    </a> -->
                    <input type="submit" value="Masuk" class="btn">
                    <p>
                        Belum punya akun? <a href="/signup">Daftar sekarang</a>
                    </p> 
                </form>
            </div>
        </div>
        
    </div>


    <!-- footer -->
    <!-- <footer id="footer">
        <div class="footer-top">
            <div class="container">
              <div class="row  align-items-center">
      
                <div class="col-lg-3 col-md-6">
                    <img src="/reg/images/logo/logo_michan.png" width="150px">
                   <p>
                    Jl. Arjuna 2 Blok B<br>
                    Jakasetia, Bekasi<br>
                    Selatan, Kota Bekasi<br>
                    17147 <br><br>
                    <strong>Jam Kantor:</strong> <br>
                    Senin - Sabtu<br>
                    8:30 - 16:00<br>
                    (Minggu Libur)
                  </p>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <h4>Customer Care</h4>
                  <ul>
                    <li>Cara Order</a></li>
                    <li>Konfirmasi Pembayaran</a></li>
                    <li>Terms of Service</a></li>
                    <li>Privacy policy</a></li>
                    <li>FAQ</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6">
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <h4>Kontak Pusat</h4>
                    <ul>
                        <li> Area Jawa<br>
                            0878-3345-7649</a>
                        </li>
                        <li>Luar Jawa<br>
                            0813-2645-9064</a>
                        </li>
                        <li>Khusus Transfer<br>
                            0896-3619-7824</a>
                        </li>
                    </ul>
                  </div>
                
                </div>
      
              </div>
            </div>
          </div>
    </footer> -->

    <script src="/reg/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/reg/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>