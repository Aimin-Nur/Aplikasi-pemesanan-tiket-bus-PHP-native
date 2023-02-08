<?php
include "koneksi.php";

$get1 = mysqli_query($koneksi, "SELECT * FROM data_bus");
$count1 = mysqli_num_rows($get1);


$vip = mysqli_query($koneksi, "SELECT * FROM data_bus where kelas='VIP'");
$kvip = mysqli_num_rows($vip);


$ekonomi = mysqli_query($koneksi, "SELECT * FROM data_bus where kelas='Economic'");
$keconomi = mysqli_num_rows($ekonomi);


$bisnis = mysqli_query($koneksi, "SELECT * FROM data_bus where kelas='Business'");
$kbisnis = mysqli_num_rows($bisnis);


$penumpang = mysqli_query($koneksi, "SELECT * FROM penumpang");
$tiket = mysqli_num_rows($penumpang);


$administator = mysqli_query($koneksi, "SELECT * FROM admin_kalla where tingkat='admin'");
$admin = mysqli_num_rows($administator);

$userr = mysqli_query($koneksi, "SELECT * FROM admin_kalla where tingkat='user'");
$user = mysqli_num_rows($userr);


$email = mysqli_query($koneksi, "SELECT * FROM transaksi where status='1'");
$terkirim = mysqli_num_rows($email);

$unsent = mysqli_query($koneksi, "SELECT * FROM transaksi where status='0'");
$belum = mysqli_num_rows($unsent);

$bbca = mysqli_query($koneksi, "SELECT * FROM transaksi where bank='Bank BCA'");
$bca = mysqli_num_rows($bbca);

$bbsi = mysqli_query($koneksi, "SELECT * FROM transaksi where bank='Bank BSI'");
$bsi = mysqli_num_rows($bbsi);

$bmandiri = mysqli_query($koneksi, "SELECT * FROM transaksi where bank='Bank Mandiri'");
$mandiri = mysqli_num_rows($bmandiri);

$bbni = mysqli_query($koneksi, "SELECT * FROM transaksi where bank='Bank BNI'");
$bni = mysqli_num_rows($bbni);

$bbri = mysqli_query($koneksi, "SELECT * FROM transaksi where bank='Bank BRI'");
$bri = mysqli_num_rows($bbri);

$uang = mysqli_query($koneksi, "SELECT SUM(total_harga) AS sum FROM transaksi");
while($row = mysqli_fetch_assoc($uang)){
    $output = "Rp."." ".$row['sum'];
}



error_reporting(0);

session_start();

if($_SESSION['tingkat']=="admin"){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Travel Kalla Bus</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-bus me-2"></i>Kalla Bus</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo  $_SESSION['usernamae']?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Rute Perjalanan</a>
                    <a href="admin_user.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User & Admin</a>
                    <a href="penumpang.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Penumpang</a>
                    <a href="kursi.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Seat</a>
                    <a href="transaksi.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Transaksi</a>
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
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
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


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Jumlah Rute</p>
                                <h6 class="mb-0"><?=$count1;?> Kelas</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-bus fa-3x text-primary"></i>
                            <div class="ms-5">
                                <p class="mb-2">Kelas VIP</p>
                                <h6 class="mb-0"><?=$kvip;?> Kelas</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Kelas Bisnis</p>
                                <h6 class="mb-0"><?=$kbisnis;?> Kelas</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Kelas Ekonomi</p>
                                <h6 class="mb-0"><?=$keconomi;?> Kelas</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pemesan Tiket</p>
                                <h6 class="mb-0"><?=$tiket;?> Orang</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Admin</p>
                                <h6 class="mb-0"><?=$admin;?> Orang</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-address-card fa-3x fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">User</p>
                                <h6 class="mb-0"><?=$user;?> Orang</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-envelope-open fa-3x text-primary"  aria-hidden="true"></i>
                            <div class="ms-3">
                                <p class="mb-2">Tiket Terkirim</p>
                                <h6 class="mb-0"><?=$terkirim;?> tiket</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-retweet fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Tiket Unsent</p>
                                <h6 class="mb-0"><?=$belum;?> Tiket</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-credit-card fa-3x text-primary" aria-hidden="true"></i>
                            <div class="ms-3">
                                <p class="mb-2">Uang Masuk</p>
                                <h6 class="mb-0"><?=$output;?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-credit-card fa-3x text-primary" aria-hidden="true"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pembayaran Via BCA</p>
                                <h6 class="mb-0"><?=$bca;?> Penumpang</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-credit-card fa-3x text-primary" aria-hidden="true"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pembayaran Via BNI</p>
                                <h6 class="mb-0"><?=$bni;?> Penumpang</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-credit-card fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pembayaran Via BSI</p>
                                <h6 class="mb-0"><?=$bsi;?> Penumpang</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-credit-card fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Via Mandiri</p>
                                <h6 class="mb-0"><?=$mandiri;?> Penumpang</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-credit-card fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pembayaran Via BRI</p>
                                <h6 class="mb-0"><?=$bri;?> Penumpang</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            

            <!-- Footer Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="bg-transparent rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
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