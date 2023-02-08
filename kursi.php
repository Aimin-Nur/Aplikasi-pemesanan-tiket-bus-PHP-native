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
                    <a href="admin_user.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User & Admin</a>
                    <a href="admin_user.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Penumpang</a>
                    <a href="admin_user.php" class="nav-item nav-link active"><i class="fa fa-user me-2"></i>Seat</a>
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
            <h3 class="text-center">Bookingan Seat Penumpang</h3>
            <h3 class="text-center">Kalla Bus Travel</h3>
        </div>
            

                    <?php

                    $no = 1;
                    if (isset($_POST['tcari'])){
                        $q = mysqli_query($koneksi,"SELECT * FROM kursi WHERE kelas LIKE '%$_POST[cari]%' or kode_bus LIKE '%$_POST[cari]%' ORDER BY kode_bus ASC");
                    }else {
                        echo "Silahkan Masukkan Kode Bus";
                    }
                    
                    // $tampil = mysqli_query($koneksi, $q);
                    while ($data = mysqli_fetch_array($q)) :
                        $booked_seats = false;
                        $booked_seats = $data['booked_seats'];
                    ?>
                                <? $no++ ?>
                                <? $data['kode_bus'] ?>
                                <? $data['kelas'] ?>
                                <? $data['booked_seats']?>
            <!-- DATA PENUMPANG -->

            <div class="container mt-5 bg-secondary">
                <div class="row">
                    <div class="col-12 align-items-center">
                        <h5 class="mt-4">Kursi Yang Terisi : <br></h5> <br>
                        <div class="container align-items-center" id="displaySeats" data-seats="<?= $booked_seats?>">
                                <p class="text-danger text-monospace text-center"><b><?= $booked_seats?></b></p><br>
                                <p class="text-white text-center">kode Bus <?= $data['kode_bus']?></p>
                            </div> 
                        </div>
                       
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
       





        <style>

        #seatsDiagram label.notAvailable,
        #displaySeats label.notAvailable
            {
                color: white;
                background-color: #db2619;
            }

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

            .size{
            padding: 30px;
            }

            .seat {
            display: flex;
            
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
            background:#ECECEC;
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
            background: #9CFF2E;
            }
        </style>




        <script>
            const busJson = document.querySelector("#busJson").value;
            const busData = JSON.parse(busJson);
            const seatDiagram = document.querySelector("#displaySeats");
            let booked_seats = "";

            if(seatDiagram)
            {
                booked_seats = seatDiagram.dataset.seats;
            }
            if(booked_seats)
            {
                // Color the taken seats as purple
                booked_seats = booked_seats.split(",");

                booked_seats.forEach(seatNo => {
                    const seat = seatDiagram.querySelector(`#seat-${seatNo}`);
                    seat.classList.add("notAvailable");
                });
            }

            const seatsBody = document.body;

            seatsBody.addEventListener("click", listenforBusSearches);

            function listenforBusSearches(evt){
                if(evt.target.className.includes("busnoInput"))
                {
                    console.log("Fired");
                    const searchInput = evt.target;
                    const suggBox = searchInput.nextElementSibling;
                    searchInput.addEventListener("input", showSuggestions);
                    suggBox.addEventListener("click", selectSuggestion);
                }
            }


            function selectSuggestion(evt){
                if(evt.target.nodeName === "LABEL")
                {
                    this.previousElementSibling.value = evt.target.innerText;
                    this.innerText = "";
                }
            }

            function showSuggestions()
            {
                const word = this.value;
                if(!word)
                {
                    this.nextElementSibling.innerText = "";
                    return;
                }

                const regex = new RegExp(word, "gi");

                let suggestions = busData.filter(({kode_bus}) => {
                    return kode_bus.match(regex);
                }).map(({kode_bus}) => {
                    const bus_num = kode_bus.replace(regex, `<span class="hl">${this.value.toUpperCase()}</span>`);;
                    return `<li>${kode_bus}</li>`;
                }).join("");

                this.nextElementSibling.innerHTML = suggestions;
            }

        </script>







            <!-- AKHIR DATA PENUMPANG -->


            <!-- Footer Start -->
            <div class="container-fluid pt-5 px-5 ">
                <div class="bg-transparent rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div>
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