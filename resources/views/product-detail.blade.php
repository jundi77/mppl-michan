<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - Michan Hijab</title>
    <link rel="stylesheet" href="/reg/vendor/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/reg/styles/main.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
        <div class="container">
            <a href="/index.html" class="navbar-brand">
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
                        <a href="/index.html" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/products.html" class="nav-link">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cart.html" class="nav-link">
                            <img class="d-none d-lg-block" src="/reg/images/icon/bag.svg" width="20px">
                            <span class="d-lg-none">Keranjang</span> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/login.html" class="nav-link">
                            <img class="d-none d-lg-block" src="/reg/images/icon/person.svg" width="24px">
                            <span class="d-lg-none">Akun</span>
                        </a> 
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-content page-details">

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
                                <li class="breadcrumb-item"><a href="/index.html">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="/products.html">Produk</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Alif Kemko
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section> 

        <div class="container">
            <!-- product -->
            <div class="product-content product-wrap clearfix product-detail">
                <div class="row justify-content-around">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carousel" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel" data-slide-to="1"></li>
                              <li data-target="#carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="/reg/images/pictures/product-detail-1.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="/reg/images/pictures/product-detail-2.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="/reg/images/pictures/product-detail-3.jpg" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
    
                    <div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="product-information">
                            <div class="product-title">
                                <div class="product-name">
                                    Alif Kemko
                                </div>
                                <div class="product-price">
                                    Rp179.000
                                </div>
                                <div class="product-category">
                                    <strong>Kategori:</strong> Koko Dewasa
                                </div>
                                <!-- Description -->
                                <div class="product-description">
                                    <h5>Deskripsi</h5>
                                    <p>
                                        • Size S,M,L,XL,XXL <br>
                                        • matt polos Katun toyobo RM<br>
                                        • kerah shanghai<br>
                                        • kancing full buka-an<br>
                                        • variasi lipit jarum /opneisel pada badan depan<br>
                                        • kantong dada<br>
                                        • cadangan kancing 1<br>
                                    </p>
                                </div>
                            </div>
                            <div class="product-selection">
                                <div class="form-row justify-content-between">
                                    <div class="col-md-6">
                                        <label for="colorSelection">Warna</label>
                                        <select class="form-control" id="colorSelection" >
                                            <option class="disable">Warna</option>
                                            <option>Marun</option>
                                            <option>Peanut</option>
                                            <option>Brown</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sizeSelection">Ukuran</label>
                                        <select class="form-control" id="sizeSelection" >
                                            <option class="disable">Ukuran</option>
                                            <option>XS</option>
                                            <option>M</option>
                                            <option>L</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- quantity -->
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <label for="quantity">Qty</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1">
                                    </div>
                                </div>
                                <button type="submit" class="btn">Masukkan Keranjang</button>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <!-- end product -->
        </div>
    </div>
    </div>

    <!-- footer -->
    <footer id="footer">
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
    </footer>

    <script src="/reg/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/reg/vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>