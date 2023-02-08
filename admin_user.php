<?php

include "koneksi.php";
session_start();
error_reporting(0);
if($_SESSION['tingkat']=="admin"){
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
                    <a href="admin_user.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>User & Admin</a>
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
            <h3 class="text-center">Master Data Admin & User Kalla Bus</h3>
            <h3 class="text-center">Kalla Bus Travel</h3>
        </div>

        <div class="card mt-3 bg-secondary  rounded p-4">
             <!-- Button trigger modal -->
             <div class="row">
            <div class="d-flex align-items-center text-white justify-content-between mb-4 col-6 col-sm-12">  
                 <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUser">
                    Tambah Data User
                </button>  
                 <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    Tambah Data Admin
                </button>  
            </div>
            </div>
            
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <tr class="text-white">
                                <th>No.</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Nomor Hp</th>
                                <th>Alamat</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Hapus</th>
                        </tr>

                    <?php

                    $no = 1;
                    if (isset($_POST['tcari'])){
                        $q = mysqli_query($koneksi,"SELECT * FROM admin_kalla WHERE nama_lengkap LIKE '%$_POST[cari]%' OR username LIKE '%$_POST[cari]%' OR tingkat LIKE '%$_POST[cari]%' ORDER BY nama_lengkap ASC");
                    }else {
                        $q = mysqli_query($koneksi,"SELECT * FROM admin_kalla ORDER BY nama_lengkap ASC");
                    }
                    
                    // $tampil = mysqli_query($koneksi, $q);
                    while ($data = mysqli_fetch_array($q)) :
                    ?>

                            <tr class="text-white">
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama_lengkap'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['no_hp'] ?></td>
                                <td><?= $data['alamat']?></td>
                                <td><?= $data['username']?></td>
                                <td><?= $data['tingkat']?></td>
                                <td>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
                                </td>
                            </tr>

                        <!-- Awal Modal Hapus -->
                        <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="edit_crud.php">
                                        <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">

                                        <div class="modal-body">

                                            <h5 class="text-center text-dark"> Apakah anda yakin akan menghapus data ini? <br>
                                                <span class="text-danger"><?= $data['username'] ?> - <?= $data['tingkat'] ?></span>
                                            </h5>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger" name="bdelete">Ya, Hapus aja!</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Hapus -->

                    
                    <?php endwhile; ?>
                </table>




                <!-- Awal Modal Admin -->
                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="staticBackdropLabel">Form Data Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="edit_crud.php">
                                <div class="modal-body">
                                <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control text-white"  name="tnama" placeholder="Masukkan Nama Anda">
                                              </div>

                                            <div class="mb-3 col-lg-6 ">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control text-white"  name="temail"  placeholder="Masukkan Email Anda">
                                              </div>

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Nomor Hp</label>
                                                <input type="number" class="form-control text-white"  name="thp" placeholder="Masukkan Nomor Hp">
                                              </div>   

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" class="form-control text-white"  name="talamat" placeholder="Masukkan Alamat Anda">
                                              </div>

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control text-white"  name="tusername" placeholder="Masukkan Username">
                                              </div>   
                                              
                                              
                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Kata Sandi</label>
                                                <input type="password" class="form-control text-white"  name="tpassword" placeholder="Masukkan Username">
                                              </div>    

                                              <div class="mb-3 col-sm-6">
                                                <label class="form-label text-white">Level</label>
                                                <select class="form-select" name="tlevel">
                                                    <option value="Admin">Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="sadmin">Simpan</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Keluar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal -->


                <!-- Awal Modal User -->
                <div class="modal fade" id="modalUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="staticBackdropLabel">Form Data User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="edit_crud.php">
                                <div class="modal-body">
                                <div class="row">
                                            <div class="mb-3 col-lg-6">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control"  name="tnama" placeholder="Masukkan Nama Anda">
                                              </div>

                                            <div class="mb-3 col-lg-6 ">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control text-white"  name="temail"  placeholder="Masukkan Email Anda">
                                              </div>

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Nomor Hp</label>
                                                <input type="number" class="form-control"  name="thp" placeholder="Masukkan Nomor Hp">
                                              </div>   

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" class="form-control"  name="talamat" placeholder="Masukkan Alamat Anda">
                                              </div>

                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control"  name="tusername" placeholder="Masukkan Username">
                                              </div>   
                                              
                                              
                                            <div class="mb-3 col-sm-6">
                                                <label class="form-label">Kata Sandi</label>
                                                <input type="password" class="form-control"  name="tpassword" placeholder="Masukkan Username">
                                              </div>    

                                              <div class="mb-3 col-sm-6">
                                                <label class="form-label">Level</label>
                                                <select class="form-select" name="tlevel">
                                                    <option value="User">User</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="suser">Simpan</button>
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