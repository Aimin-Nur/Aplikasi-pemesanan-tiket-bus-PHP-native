<?php
include "koneksi.php";

$server = "localhost";
$user = "root";
$password = "";
$database = "dbcrud_bus";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

$sql = mysqli_query($koneksi, "SELECT max(urut) as maxURUT from transaksi");
$data = mysqli_fetch_array($sql);

$kode = $data['maxURUT'];

$kode++;
$ket = date("Ymd");
$kodeauto = $ket . sprintf("%02s", $kode);
error_reporting(0);

session_start();
if($_SESSION['tingkat']="admin"){
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
    <link href="style.css" rel="stylesheet">

    

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
                <a class="nav-link text-white active me-2" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white me-2" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tiket Bus
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Cari tiket</a></li>
                </ul>
                <li>
                </li>
              </li>
            </ul>
          </div>
          <a class="btn btn-danger nav-link py-4 px-lg-5 d-inline-flex d-lg-block text-light -5" href="/signin.php">Login<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
      </nav>
      <!-- navbar akhir -->

      <!-- Home -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(aset/foto/bus-9.jpeg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Tiket</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tiket</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
      <!-- akhir home -->


      <!-- Tiket -->
      <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">Kalla Bus</h6>
                <h1 class="mb-5 text-white">Jelajahi Fasilitas Bus Kalla</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active text-light" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0 text-light">Kelas VIP</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 text-light" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0 text-danger">Kelas Bisnis</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 text-light" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-bus fa-2x me-3"></i>
                            <h4 class="m-0 text-danger">Kelas Ekonomi</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="aset/foto/bus-11.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-white">Armada VIP Kalla Bus Harga mulai Rp. 350.000</h3>
                                    <p class="mb-4">Armada Premium Bus Juragan99 Trans dilengkapi dengan type kursi nyaman dan dapat disesuaikan dengan tingkat kenyamanan masing - masing orang , memiliki hiburan tv screen di setiap seat kursi dan dapat memilih sendiri chanel / tontonan anda.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Free Wifi 24 Jam</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Coffe Maker</p>
                                    <p><i class="fa fa-check text-success me-3"></i>USB Charger</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="aset/foto/bisnis.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-white">Armada Bisnis Kalla Bus Harga mulai Rp. 250.000</h3>
                                    <p class="mb-4">Armada Premium Bus Juragan99 Trans dilengkapi dengan type kursi nyaman dan dapat disesuaikan dengan tingkat kenyamanan masing - masing orang , memiliki hiburan tv screen di setiap seat kursi dan dapat memilih sendiri chanel / tontonan anda.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Free Wifi 24 Jam</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Coffe Maker</p>
                                    <p><i class="fa fa-check text-success me-3"></i>USB Charger</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="aset/foto/ekonomi.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 text-white">Armada Ekonomi Kalla Bus Harga mulai dari Rp. 200.000</h3>
                                    <p class="mb-4">Armada Premium Bus Juragan99 Trans dilengkapi dengan type kursi nyaman dan dapat disesuaikan dengan tingkat kenyamanan masing - masing orang , memiliki hiburan tv screen di setiap seat kursi dan dapat memilih sendiri chanel / tontonan anda.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Free Wifi 24 Jam</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Coffe Maker</p>
                                    <p><i class="fa fa-check text-success me-3"></i>USB Charger</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Tiket akhir -->


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
                                <input type="date" name="cari_tanggal" class="form-control border-0" placeholder="Tanggal Keberangkatan">
                            </div>
                            <div class="col-sm-6 col-12 mt-4">
                                <label class="form-label"></label>
                                <select class="form-select" name="kelas_bus">
                                    <option value="VIP" name="kelas_bus">VIP</option>
                                    <option value="Business" name="kelas_bus">Business</option>
                                    <option value="Economic" name="kelas_bus">Economic</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="cari_asal" class="form-control border-0" placeholder="Kota Asal">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="cari_tujuan" class="form-control border-0" placeholder="Kota Tujuan">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3 text-white" name="tcari" type="submit">Lihat Tiket</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>


    <!-- tiket -->



    <div class="card mt-3 bg-secondary rounded p-4">
             <!-- Button trigger modal -->
        <div class="row">
            <div class="d-flex text-align-center text-white justify-content-between mb-4 col-6 col-sm-12">
                <h5 class="text-center text-white text-align-center">Data Rute Perjalanan Kalla Bus</h5>  
            </div>
        </div>

            <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <tr class="text-white">
                                        <th>No.</th>
                                        <th>Tanggal Keberangkatan</th>
                                        <th>Jam Keberangkatan</th>
                                        <th>Kota Asal</th>
                                        <th>Kota Tujuan</th>
                                        <th>Kelas</th>
                                        <th>Kapasitas</th>
                                        <th>Harga</th>
                                        <th>Booking</th>
                                </tr>

                            <?php

                            $no = 1;
                            if (isset($_POST['tcari'])){
                                $q = mysqli_query($koneksi,"SELECT row_id, kode_bus, tanggal_keberangkatan, jam_keberangkatan, kota_asal, kota_tujuan, kelas, kapasitas, harga FROM data_bus WHERE kota_asal LIKE '%$_POST[cari_asal]' AND tanggal_keberangkatan LIKE '%$_POST[cari_tanggal]%' AND kota_tujuan LIKE '%$_POST[cari_tujuan]' AND kelas LIKE '%$_POST[kelas_bus]%' ORDER BY kode_bus ASC");
                            }else {
                                $q = mysqli_query($koneksi, "SELECT * FROM data_bus ORDER BY kode_bus ASC");
                            }
                            
                            // $tampil = mysqli_query($koneksi, $q);
                            while ($data = mysqli_fetch_array($q)) :
                            ?>

                                    <tr class="text-white">
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['tanggal_keberangkatan'] ?></td>
                                        <td><?= $data['jam_keberangkatan'] ?></td>
                                        <td><?= $data['kota_asal']?></td>
                                        <td><?= $data['kota_tujuan']?></td>
                                        <td><?= $data['kelas']?></td>
                                        <td><?= $data['kapasitas']?> Orang</td>
                                        <td><?= "Rp.". number_format($data['harga'])?></td>
                                        <td>
                                            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalToggle<?= $no ?>" role="button">Pesan Tiket</a>
                                        </td>
                                    </tr>
                
    <!-- AKHIR TIKET -->

    
    <!-- MODAL DATA PENUMPANG -->
    <div class="modal fade" id="exampleModalToggle<?= $no ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Pemesanan Tiket Online Bus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
            <div class="alert alert-success" id="myAllert" name="bayar" method="POST">
                Data Berhasil dikirim ke Databases. <a href="#" data-bs-target="#exampleModalToggle2<?= $no ?>" data-bs-toggle="modal" data-bs-dismiss="modal" class="alert-link">klik disini</a> untuk mendapatkan kode VA.
            </div>
        <form method="POST" action="edit_crud.php" enctype="multipart/form-data">
            <input type="hidden" name="tkode" value="<?= $data['kode_bus'] ?>">
        <div class="row text-dark">
            <div class="mb-4 col-lg-6">
                <label class="form-label">Kelas</label>
                <input type="text" class="form-control"  name="tkelas" placeholder="Masukkan Kode Bus"  value="<?= $data['kelas'] ?>" readonly>
            </div>
            <div class="mb-4 col-lg-6">
                <label class="form-label">Tanggal Keberangkatan</label>
                <input type="date" class="form-control"  name="ttanggal" placeholder="Masukkan Kode Bus" value="<?= $data['tanggal_keberangkatan'] ?>" readonly>
            </div>
            <div class="mb-4 col-lg-6">
                <label class="form-label">Jam Keberangkatan</label>
                <input type="text" class="form-control"  name="tjam" value="<?= $data['jam_keberangkatan'] ?>" readonly>
            </div>
            <div class="mb-4 col-lg-6">
                <label class="form-label">Kota Asal</label>
                <input type="text" class="form-control" name="tasal" placeholder="Masukkan Kode Bus" value="<?= $data['kota_asal'] ?>" readonly>
            </div>
            <div class="mb-4 col-lg-6">
                <label class="form-label">Kota Tujuan</label>
                <input type="text" class="form-control"  name="ttujuan" placeholder="Masukkan Kode Bus" value="<?= $data['kota_tujuan'] ?>" readonly>
            </div>
            <div class="mb-4 col-lg-6">
                <label class="form-label">Harga</label>
                <input type="text" class="form-control"  name="tharga" placeholder="Harga"  value="<?= $data['harga'] ?>/tiket" readonly>
            </div>
            <div class="mb-4 col-lg-12">
                <label class="form-label">Alamat Email</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control"  name="temail" placeholder="syntax@gamil.com">
                </div>
            </div>
            <div class="mb-4 col-lg-12">
                <label class="form-label">Nomor Nik</label>
                <div class="input-group">
                    <span class="input-group-text"><small class="fa fa-user-alt"></small></span>
                    <input type="number" class="form-control"  name="tnik" placeholder="747232090211">
                </div>
            </div>
            <div class="mb-4 col-lg-12">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control"  name="tnama" placeholder="Nama Lengkap">
            </div>
            <div class="mb-4 col-lg-6">
                <label class="form-label">Jumlah Tiket</label>
                <select class="form-select" name="tjumlah">
                        <option value="1">1 Tiket</option>
                        <option value="2">2 Tiket</option>
                        <option value="3">3 Tiket</option> 
                        <option value="4">4 Tiket</option>
                    </select>
            </div>
            <div class="mb-4 col-lg-6">
                <label class="form-label">Metode Pembayaran (Virtual Account)</label>
                    <select class="form-select" name="tpembayaran">
                        <option value="Bank BCA">Bank BCA</option>
                        <option value="Bank BNI">Bank BNI</option>
                        <option value="Bank BSI">Bank BSI</option> 
                        <option value="Bank BRI">Bank BRI</option>
                        <option value="Bank Mandiri">Bank Mandiri</option>  
                    </select>
            </div>

           
                <label for="">Posisi Kursi</label>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                        <ol>
                            <li>
                                <div class="row mt-2">
                                    <div class="col-lg-2">
                                    <ol class="seats">
                                            <li class="seat">
                                            <input type="checkbox" id="1A" value="1A" name="tkursi[]" />
                                            <label for="1A" class="p-4">1A</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="3B" value="1B" name="tkursi[]" />
                                            <label for="3B" class="p-4">3B</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="5C" value="5C" name="tkursi[]" />
                                            <label for="5C" class="p-4">5C</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="7D" value="7D" name="tkursi[]"/>
                                            <label for="7D" class="p-4">7D</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="9E" value="9E" name="tkursi[]" />
                                            <label for="9E" class="p-4">9E</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="4C" value="4C" name="tkursi[]" />
                                            <label for="4C" class="p-4">4C</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="5D" value="5D" name="tkursi[]" />
                                            <label for="5D" class="p-4">5D</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="7F" value="7F" name="tkursi[]" />
                                            <label for="7F" class="p-4">7F</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="9F" value="9F" name="tkursi[]" />
                                            <label for="9F" class="p-4">9F</label>
                                            </li>
                                            <li class="seat">
                                            <input class="ms-4" type="checkbox" id="15F" value="15F" name="tkursi[]" />
                                            <label for="" class="p-3 ms-3">Supir</label>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                    <ol class="seats">
                                            <li class="seat">
                                            <input type="checkbox" id="2A" value="2A" name="tkursi[]" />
                                            <label for="2A" class="p-4">2A</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="4B" value="4B" name="tkursi[]" />
                                            <label for="4B" class="p-4">4B</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="6C" value="6C" name="tkursi[]" />
                                            <label for="6C" class="p-4">6C</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="8D" value="8D" name="tkursi[]"/>
                                            <label for="8D" class="p-4">8D</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="2E" value="2E" name="tkursi[]" />
                                            <label for="2E" class="p-4">2E</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="4F" value="4F" name="tkursi[]" />
                                            <label for="4F" class="p-4">4F</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="6F" value="6F" name="tkursi[]" />
                                            <label for="6F" class="p-4">6F</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="8F" value="8F" name="tkursi[]" />
                                            <label for="8F" class="p-4">8F</label>
                                            </li>
                                            <li class="seat">
                                            <input type="checkbox" id="4X" value="4X" name="tkursi[]" />
                                            <label for="4X" class="p-4">4X</label>
                                            </li>
                                            <li class="seat">
                                            <input class="ms-4" type="checkbox" id="15F" value="15F" name="tkursi[]" />
                                            <label for="" class="p-3 ms-3">Supir</label>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                
                            </li>
                        </ol>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 mt-3">
                    <button class="btn btn-success w-100 py-3 text-white" name=test type="submit" onclick="myFunction()">Booking tiket</button>
                </div>
            </div>
        
            </div>
            <!-- <div class="modal-footer">
                <button class="btn btn-primary text-white" name="bsatu" type="submit">Pesan Tiket</button>
            </div> -->
        </div>
    </div>
</div>

    </div>
    <div class="modal fade" id="exampleModalToggle2<?= $no ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Konfirmasi Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5><?= $kodeauto ?>- <span class="text-dark">Kode Virtual Account Anda.</span></h5>
                    Upload Bukti Pembayaran Sesuai dengan Metode Pembayaran yang anda Pilih.
                    <br>
                    <label class="form-label">Bukti Pembayaran</label>
                    <input type="file" class="form-control text-white" name="bukti_tf" required=""/>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success w-100 py-3 text-white" name="btiket" type="submit">Booking tiket</button> 
                </div>
            </div>
        </div>
    </div>
   
</form>


    <script>
        var myAllert = document.getElementById('myAllert');
        myAllert.style.display = 'none';

        function myFunction(){
            myAllert.style.display = 'block';
        }
    </script>
     <?php endwhile; ?>
    </div>
    </div>
    </div>
    </table>
    </div>
</div>
        <!-- AKHIR MODAL DATA PENUMPANG -->



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
                            <a href="">TIket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
    ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.seat {
  display: flex;
  flex: 0 0 14.28%;
  padding: 5px;
  position: relative;
}

.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bolder;
  line-height: 1.5rem;
  padding: 4px 0;
  background: #5bfc60 ;
  border-radius: 5px; 
  color: black; 
}

.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px green;
}

.seat:nth-child(3) {
  margin-right: 14%;
}
.seat input[type=checkbox] {
  position: absolute;
}
.seat input[type=checkbox]:checked + label {
  background: #656e65; 
}
</style>






   





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

<?php 
} else {
    echo "<script>alert('Anda Harus Login Terlebih dahulu.');
    location.href=\"../signin.php\"</script>";
}