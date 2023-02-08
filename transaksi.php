<?php

include "koneksi.php";
session_start();
error_reporting(0);
if($_SESSION['tingkat']=="admin"){

$sql = mysqli_query($koneksi, "SELECT max(urut) as maxURUT from transaksi");
$data = mysqli_fetch_array($sql);

$kode = $data['maxURUT'];

$kode++;
$ket = date("Ymd");
$kodeauto = $ket . sprintf("%03s", $kode);


$tiket = $data['maxURUT'];
$tiket++;
$j = "TKTBUS";
$tiketauto = $j . sprintf("%03s", $tiket);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Kalla Bus</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
      <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-bus me-2"></i>KallaBus</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/profil.jpeg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['usernamae']?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Rute Perjalanan</a>
                    <a href="admin_user.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User & Admin</a>
                    <a href="penumpang.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Penumpang</a>
                    <a href="kursi.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Seat</a>
                    <a href="transaksi.php" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Transaksi</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form method="POST" action="">
                    <div class="input-group d-none d-md-flex ms-4">
                        <input type="text" name="cari" value="<?php if (isset($_GET['cari'])){echo $_GET['cari'];}?>" class="form-control bg-dark border-0" placeholder="Cari">  
                        <button class="btn btn-primary" type="submit" name="tcari">Cari</button>
                    </div>
                </form> 
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/profil.jpeg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['usernamae']?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container">

        <div class="mt-3">
            <h3 class="text-center">Daftar Transaksi Tiket Penumpang </h3>
            <h3 class="text-center">Kalla Bus Travel</h3>
        </div>

        <div class="card mt-3 bg-secondary  rounded p-4">
             <!-- Button trigger modal -->
             <div class="row">
            <div class="d-flex align-items-center text-white justify-content-between mb-4 col-6 col-sm-12">
                <h5 class="text-center">Laporan Transaksi Penumpang - Pengiriman Tiket Penumpang</h5>
            </div>
            </div>
            
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered border-light table-hover mb-0">
                        <tr class="text-white">
                                <th>No.</th>
                                <th>Nama Penumpang</th>
                                <th>Kode Tiket</th>
                                <th>Kode Bus</th>
                                <th>Kelas</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Bank</th>
                                <th>Kode VA</th>
                                <th>Bukti</th>
                                <th>Status</th>
                        </tr>

                    <?php

                    $no = 1;
                    if (isset($_POST['tcari'])){
                        $q = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE kelas LIKE '%$_POST[cari]%' or nama_lengkap LIKE '%$_POST[cari]%' ORDER BY urut ASC");
                    }else {
                        $q = mysqli_query($koneksi,"SELECT * FROM transaksi ORDER BY urut ASC");
                    }
                    
                   $total=0;
                    // $tampil = mysqli_query($koneksi, $q);
                    while ($data = mysqli_fetch_array($q)) :
                    $hasil =$data['jumlah_tiket']*$data['harga'];
                    $total += $data['total_harga'];
                    ?>

                            <tr class="text-white">
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama_lengkap'] ?></td>
                                <td><?= $tiketauto++ ?></td>
                                <td><?= $data['kode_bus'] ?></td>
                                <td><?= $data['kelas'] ?></td>
                                <td><?= $data['jumlah_tiket']?> tiket</td>
                                <td><?= "Rp.". number_format( $data['harga']) ?></td>
                                <td><?= "Rp.". number_format( $hasil,)?></td>
                                <td><?= $data['Bank']?></td>
                                <td><?= $kodeauto++ ?></td>
                                <td style="text-align: center;"><img src="front_end/bukti_tf/<?php echo $data['bukti_tf']; ?>" style="width: 50px;"></td>
                                <td>
                                    <?php
                                    if($data['status']==1){
                                        echo '<p> <a href="#" class="btn btn-success">Sent</a></p';
                                    }else{
                                    ?> 
                                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Unsent</a>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>

                            <!-- <script type="text/javascript">
                                let btnSend = document.getElementById('submit');

                                btnSend.addEventListener('click', () =>{
                                    btnSend.innerText = 'terkirim';

                                    setTimeout(() => {
                                        btnSend.style.display = "none";
                                    }, 50000);
                                })
                            </script> -->


                            
                            
            

                        <!-- Awal Modal Kirim -->
                        <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="staticBackdropLabel">Konfirmasi Pembayaran Tiket Bus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="status.php">
                                        <input type="hidden" name="urut" value="<?= $data['urut'] ?>">
                                        <input type="hidden" name="status" value="<?= 1?>">
                                            <div class="modal-body">
                                                <h5 class="text-center text-dark"> Konfirmasi Pembayaran Tiket Penumpang - Tiket akan langsung dikirimlkan melalui email penumpang <br>
                                                    <span class="text-danger"><?= $data['email'] ?> - <?= $data['nama_lengkap'] ?></span>
                                                </h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" name="submit" id="submit">Ya, Kirim Tiket!</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Ubah -->
                    <?php endwhile; ?>
                </table>

            <div class="d-flex align-items-center text-white text-center justify-content-between col-lg-12">
                <h5 class="mt-4 p-2 text-center ms-auto bg-primary">Jumlah Uang : <?php echo "Rp." . number_format($total)  ?></h5>
            </div>
            

                <!-- Awal Modal -->
                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="staticBackdropLabel">Form Data Kalla Bus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="edit_crud.php">
                                <div class="modal-body">
                                <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Kode Bus</label>
                                                <input type="text" class="form-control"  name="tkode" placeholder="Masukkan Kode Bus">
                                              </div>

                                            <div class="mb-3 col-lg-6 ">
                                                <label class="form-label">Tanggal Keberangkatan</label>
                                                <input type="date" class="form-control text-white"  name="ttgl"  placeholder="Masukkan Tanggal Berangkat">
                                              </div>

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Jam Keberangkatan</label>
                                                <input type="time" class="form-control"  name="tjam" placeholder="Masukkan Jam Berangkat">
                                              </div>   

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Kota Asal</label>
                                                <input type="text" class="form-control"  name="tasal" placeholder="Masukkan Kota Asal">
                                              </div>

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Kota Tujuan</label>
                                                <input type="text" class="form-control"  name="ttujuan" placeholder="Masukkan Kota Tujuan">
                                              </div>    
                                              
                                              <div class="mb-3 col-sm-6">
                                                <label class="form-label">Kelas</label>
                                                <select class="form-select" name="tkelas">
                                                    <option ></option>
                                                    <option value="VIP">VIP</option>
                                                    <option value="Business">Business</option>
                                                    <option value="Economic">Economic</option>
                                                </select>
                                            </div>

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Kapasitas</label>
                                                <input type="text" class="form-control"  name="tkapasis" placeholder="Masukkan Kapasitas Bus">
                                              </div>

                                              <div class="mb-3 col-sm-6">
                                                <label class="form-label">Harga</label>
                                                <select class="form-select" name="tharga">
                                                    <option></option>
                                                    <option value="300.000">Rp. 300.000</option>
                                                    <option value="250.000">Rp. 250.000</option>
                                                    <option value="200.000">Rp. 200.000</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Keluar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal -->


            </div>
        </div>

    </div>
            <!-- Table End -->


           
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script>
        function sayHello(){
            location:header(kirim.php)
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php 
} else {
    echo "<script>alert('Anda Harus Login Terlebih dahulu.');
    document.location='signin.php';
    </script>";
}