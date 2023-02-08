<?php
include "koneksi.php";

$server = "localhost";
$user = "root";
$password = "";
$database = "dbcrud_bus";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kallas Bus</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Logo Kalla Bus -->

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">


     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Eksternal library -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- CSS boot 5 main -->
    <link href="./aset/css/bootstap5.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="./aset/css/kallabus.css" rel="stylesheet">

</head>

<body>


    <!-- Loading intro -->
    <div class="show bg-white position-absolute translate-middle w-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Tunggu di...</span>
        </div>
    </div>
    <!-- Akhir Looding -->

    <!-- header -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4 text-light">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small class="teks-atas">Jl. Urip Sumoharjo, Makassar, Sulawesi Selatan</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center text-light py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small class="teks-atas">Senin - Ahad : 08.00 WITA - 22.00 WITA</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4 text-light">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small class="teks-atas">+62 978 1236</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a href="#" class="btn btn-sm-square bg-white text-primary me-1"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn  btn-sm-square bg-white text-primary me-1"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn  btn-sm-square bg-white text-primary me-1"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light custom shadow-sm sticky-top p-0">
        <a class="navbar-brand d-flex align-items-center px-4 px-lg-5" href="index.html"><h2 class="ikon-navbar"><i class="fa fa-bus me-3 "></i>Kalla Bus</h2></a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-white" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link text-white me-4">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white me-4" data-bs-toggle="dropdown">TIket</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="tiket.php" class="dropdown-item">Tiket</a>
                    </div>
                </div>
            </div>
            <a href=".../signin.php" class="btn btn-danger nav-link py-4 px-lg-5 d-inline-flex d-lg-block text-light">Login<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- navbar akhir -->


      <!-- Carousel -->
      <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./aset/foto/bus-9.jpg" alt="bus">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Kalla Bus Travel</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown kontent">Travel Bus Ternyaman dikelasnya</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 text-white animated slideInDown">Cek Tiket<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img src="./aset/foto/bus-2.png" alt="bus" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./aset/foto/bus-5.jpg" alt="bus">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start content">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Kalla Bus Travel</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown kontent">Travel Bus Ternyaman dikelasnya</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 text-white animated slideInDown">Cek Tiket<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img src="./aset/foto/bus-3.png" alt="bus" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
      </div>
      <!-- Akhir Carousel -->

      <!-- Home -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex py-5 px-4">
                        <i class="fa far-fa-badge-check fa-9x text-primary flex-shrink-0"></i>
                        <div class="ps-4 text-white">
                            <h5 class="text-white">Kerja Ibadah</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, non?</p>
                            <a class="text-white btn btn-primary">Pesan Tiket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4 text-white">
                            <h5 class="text-white">Apresiasi Pelanggan</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, non?</p>
                            <a class="text-white btn btn-primary">Pesan Tiket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4 text-white">
                            <h5 class="text-white">Lebih Cepat</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, non?</p>
                            <a class="text-white btn btn-primary">Pesan Tiket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-2">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4 text-white">
                            <h5 class="text-white">Lebih Baik</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, non?</p>
                            <a class="text-white btn btn-primary">Pesan Tiket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-1">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4 text-white">
                            <h5 class="text-white">Aktif Bersama</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, non?</p>
                            <a class="text-white btn btn-primary">Pesan Tiket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4">
                    <div class="position-relative w-100"  style="min-height: 550px;">
                        <img class="position-absolute img-fluid w-100 h-100" src="./aset/foto/download.jpg" style="object-fit: cover;">
                        <div class="position-absolute top-0 end-0 mt-4 me-4 py-4 px-5 kalla-overlay style=" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Tahun</span></h1>
                            <h4 class="text-white">Pengalaman</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-white text-uppercase">Layanan Bus Travel Kalla</h6>
                    <h1><span class="mb-4 text-danger">Kalla Bus</span> Travel Bus Nomor 1 terbaik di Indonesia Timur</h1>
                    <p class="mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio fugit, veritatis itaque molestiae est, debitis minima laboriosam nam dolores, reprehenderit inventore. Ab consequuntur porro esse laudantium eum, soluta voluptatum accusantium illo alias fuga omnis. Placeat aliquid magni consectetur eos ad minus expedita eveniet dolor necessitatibus numquam, laborum voluptatum vel ab.</p>
                    <div class="row g-4 pb-3 mb-3">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1 urutan-nomor">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-danger">Profesional & Expert</h6>
                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, deserunt.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1 urutan-nomor">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-danger">Profesional & Expert</h6>
                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, deserunt.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1 urutan-nomor">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-danger">Profesional & Expert</h6>
                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, deserunt.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1 urutan-nomor">
                                    <span class="fw-bold text-secondary">04</span>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-danger">Profesional & Expert</h6>
                                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, deserunt.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- Jadwal Tiket -->

      <div class="container-fluid my-5 mb-5 bg-secondary">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Lihat Jadwal Tiket Bus Tujuan Anda Langsung dan cepat.</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur corrupti tempora quo beatae nulla est. Atque doloribus libero magnam sit adipisci dolorem error, velit facere, amet quas perspiciatis quos iusto.</p>
                    </div>
                </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5">
                    <h1 class="text-white mb-4">Jadwal Keberangkatan</h1>
                    <form action="tiket.php" method="POST">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6 mt-5">
                                <input type="date"  name="cari_tanggal" class="form-control border-0" placeholder="Tanggal Keberangkatan">
                            </div>
                            <div class="col-sm-6 col-12 mt-4">
                                <label class="form-label"></label>
                                <select class="form-select" name="kelas_bus">
                                    <!-- <option value="<?= $data['kelas'] ?>"><?= $data['kelas'] ?></option> -->
                                    <option value="VIP">VIP</option>
                                    <option value="Business">Business</option>
                                    <option value="Economic">Economic</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text"  name="cari_asal" class="form-control border-0" placeholder="Kota Asal">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text"  name="cari_tujuan" class="form-control border-0" placeholder="Kota Tujuan">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3 text-white"  name="tcari" type="submit">Lihat Tiket</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>



    <div class="container-fluid text-light footer pt-5 bg-da mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Urip Sumoharjo, Office Building Nipah Mall</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 878 12364164</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>aiminnur02@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Jam Operasional</h4>
                    <h6 class="text-light">Senin - Jum'at:</h6>
                    <p class="mb-4">09.00 Wita - 22.00 Wita</p>
                    <h6 class="text-light">Sabtu:</h6>
                    <p class="mb-0">09.00 Wita - 12.00 Wita</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Tiket Bus</h4>
                    <a class="btn btn-link" href="">VIP (15 Orang)</a>
                    <a class="btn btn-link" href="">Business (20 orang)</a>
                    <a class="btn btn-link" href="">Economic (30 orang)</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Pesan tiket</h4>
                    <p>Cek Tiket yang anda ingin tuju, Cek sekarang!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">KallaBus Travel,</a> All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">El-Wazir.Studio</a>
                        <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">Kalla Institute</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Tiket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
</body>
</html>
