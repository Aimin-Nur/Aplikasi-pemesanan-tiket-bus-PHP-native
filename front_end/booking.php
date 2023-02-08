<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "dbcrud_bus";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
session_start();
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
    <!-- <div class="show bg-white position-absolute translate-middle w-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Tunggu di...</span>
        </div>
    </div> -->
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
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center px-4 px-lg-5" href="index.html"><h2 class="ikon-navbar"><i class="fa fa-bus me-3 "></i>Kalla Bus</h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav py-3 ms-auto p-4 ">
              <li class="nav-item">
                <a class="nav-link text-white active me-2" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white me-2" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white me-2" href="#">Harga</a>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white me-2" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tiket Bus
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                <li>
                </li>
              </li>
            </ul>
          </div>
          <a class="btn btn-danger nav-link py-4 px-lg-5 d-inline-flex d-lg-block text-light -5" href="#">Login<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
      </nav>
      <!-- navbar akhir -->

      <!-- Home -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(aset/foto/bus-4.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Pesan Tiket</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Pesan Tiket</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
      <!-- akhir home -->



      <?php

        $no = 1;
        if (isset($_POST['tcari'])){
                                $q = mysqli_query($koneksi,"SELECT tanggal_keberangkatan, jam_keberangkatan, kota_asal, kota_tujuan, kelas, harga FROM data_bus WHERE kota_asal LIKE '%$_POST[cari_asal]' AND tanggal_keberangkatan LIKE '%$_POST[cari_tanggal]%' AND kota_tujuan LIKE '%$_POST[cari_tujuan]' ORDER BY kode_bus ASC");
                            }else {
                                $q = mysqli_query($koneksi, "SELECT * FROM data_bus ORDER BY kode_bus ASC");
                            }
                            
                            // $tampil = mysqli_query($koneksi, $q);
                            while ($data = mysqli_fetch_array($q)) :
                            ?>

                                    
                                <?= $no++ ?>
                                <?= $data['tanggal_keberangkatan'] ?>
                                <?= $data['jam_keberangkatan'] ?>
                                <?= $data['kota_asal']?>
                                <?= $data['kota_tujuan']?>
                                <?= $data['kelas']?>
                                <?= $data['kapasitas']?>
                                <?= $data['harga']?>
                            <?php endwhile; ?>
                        
                        
                
     




      <!-- Pesan Tiket -->
    <div class="form-tiket bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mt-4 text-center">
                        <h2 class="text-primary">Form Pemesanan Tiket Bus Kalla</h2>
                        <h6 class="text-white">Silahkan Isi Form Sesuai Biodata Anda.</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="#modalUbah<?= $no ?>">
            <h4 class="mb-3">Data Bus</h4>
            <form action="">
            <input type="hidden" name="row_id" value="<?= $data['row_id'] ?>">
                <div class="row text-white">
                    <div class="mb-4 col-lg-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control"  name="tkode" placeholder="Masukkan Kode Bus"  value="<?= $data['kelas'] ?>">
                    </div>
                    <div class="mb-4 col-lg-3">
                        <label class="form-label">Tanggal Keberangkatan</label>
                        <input type="date" class="form-control"  name="tkode" placeholder="Masukkan Kode Bus" value="<?= $data['tanggal_keberangkatan'] ?>">
                    </div>
                    <div class="mb-4 col-lg-3">
                        <label class="form-label">Kota Asal</label>
                        <input type="text" class="form-control" name="tkode" placeholder="Masukkan Kode Bus" value="<?= $data['kota_asal'] ?>">
                    </div>
                    <div class="mb-4 col-lg-3">
                        <label class="form-label">Kota Tujuan</label>
                        <input type="text" class="form-control"  name="tkode" placeholder="Masukkan Kode Bus" value="<?= $data['kota_tujuan'] ?>">
                    </div>
                    <div class="mb-4 col-lg-6">
                        <label class="form-label">Alamat Email</label>
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control"  name="tkode" placeholder="syntax@gamil.com">
                        </div>
                    </div>
                    <div class="mb-4 col-lg-6">
                        <label class="form-label">Nomor Nik</label>
                        <div class="input-group">
                            <span class="input-group-text"><small class="fa fa-user-alt"></small></span>
                            <input type="number" class="form-control"  name="tkode" placeholder="747232090211">
                        </div>
                    </div>
                    <div class="mb-4 col-lg-4">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control"  name="tkode" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-4 col-lg-4">
                        <label class="form-label">Jumlah Tiket</label>
                        <input type="text" class="form-control "  name="tkode" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-4 col-lg-4">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control"  name="tkode" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-4 col-lg-6">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control"  name="tkode" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label">Posisi Kursi</label>
                        <input type="text" class="form-control"  name="tkode" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success w-100 py-3 text-white" name="tcari" type="submit">Booking tiket</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <span>Rules :</span>
                <ul>
                    <li><span>Pengunjung hanya bisa memesan 4 tiket dalam satu kali transaksi.</span></li>
                    <li><span>Gunakan Alamat Email yang Valid karena tiket akan langsung dikirimkan melalui email setelah pemabyaran selesai.</span></li>
                    <li><span>Silahkan pilih Metode Pembayaran Virtual Account yang telah kami sediakan.</span></li>
                </ul>
                
            </div>
        </div>
    </div>

      <!-- Pesan Tiket Akhir -->



      <div class="modalfade-right" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>





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
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
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