<?php

include "koneksi.php";

error_reporting(0);
// $id = $_POST['row_id'];
// $query_get = mysqli_query($koneksi, "SELECT * FROM data_bus WHERE row_id = '$id'");
// $get_data = mysqli_fetch_array ($query_get);
// $a = $get_data['row_id'];
// $b = $get_data[ 'jumlah_tiket'];
// $get_br = mysq1i_query ($koneksi, "SELECT * FROM transaksi WHERE row_id = '$a'");
// $data_br = mysqli_fetch_array($get_br);
// $stok = $data_br['kapasitas'];
// $total_stok = $stok - $b;
// $query_up = mysqli_query ($koneksi, "UPDATE data_bus SET kapasitas = '$total_stok'");
// // if ($query_up) {
// // $query = mysqli_query($koneksi, "DELETE FROM transaksi _masuk WHERE id_tm =
// // '$id'");
// header('location: otomatis.php');

$sql = mysqli_query($koneksi, "SELECT max(urut) as maxURUT from transaksi");
$data = mysqli_fetch_array($sql);

$kode = $data['maxURUT'];
$kode++;
$ket = date("Ymd");
$kodeauto = $ket . sprintf("%03s", $kode);

$tiket = $data['maxURUT'];
$tiket++;
$j = "TKTBUS";
$tiketauto = $j . sprintf("%01s", $tiket);

if(isset($_POST['bsimpan'])){
    $simpan = mysqli_query($koneksi, "INSERT INTO data_bus(kode_bus, tanggal_keberangkatan, jam_keberangkatan, kota_asal, kota_tujuan, kelas, kapasitas, harga) VALUES(
                                                    '$_POST[tkode]', 
                                                    '$_POST[ttgl]', 
                                                    '$_POST[tjam]', 
                                                    '$_POST[tasal]', 
                                                    '$_POST[ttujuan]', 
                                                    '$_POST[tkelas]', 
                                                    '$_POST[tkapasis]',
                                                    '$_POST[tharga]') ");
if($simpan){
    echo "<script>alert('Simpan Rute Bus Berhasil!');
    document.location='table.php';
    </script>";
} else{
    echo "<script>alert('Simpan Gagal!');
    document.location='table.php';
    </script>";
}

}


if(isset($_POST['bubah'])){
    $ubah = mysqli_query($koneksi, "UPDATE data_bus SET 
                                                        kode_bus = '$_POST[tkode]',
                                                        tanggal_keberangkatan = '$_POST[ttgl]',
                                                        jam_keberangkatan = '$_POST[tjam]',
                                                        kota_asal = '$_POST[tasal]',
                                                        kota_tujuan = '$_POST[ttujuan]',
                                                        kelas = '$_POST[tkelas]',
                                                        kapasitas = '$_POST[tkapasis]',
                                                        harga = '$_POST[tharga]'
                                                    WHERE row_id = '$_POST[row_id]'
                                                    ");
                                                            



if($ubah){
    echo "<script>alert('Edit Rute Bus Berhasil!');
    document.location='table.php';
    </script>";
} else{
    echo "<script>alert('Ubah Rute Gagal!');
    document.location='table.php';
    </script>";
}

}

//Uji jika tombol Hapus di klik
if (isset($_POST['bhapus'])) {

    //persiapan Hapus Data
    $hapus = mysqli_query($koneksi, "DELETE FROM data_bus WHERE row_id = '$_POST[row_id]'");


    //jika Hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data Sukses!');
                document.location='table.php';
             </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='table.php';
             </script>";
    }
}




// DATA ADMIN & USER


// Tambah Data Admin
if(isset($_POST['sadmin'])){
    $simpan = mysqli_query($koneksi, "INSERT INTO admin_kalla(nama_lengkap, email, no_hp, alamat, username, kata_sandi, tingkat) VALUES(
                                                    '$_POST[tnama]', 
                                                    '$_POST[temail]', 
                                                    '$_POST[thp]', 
                                                    '$_POST[talamat]', 
                                                    '$_POST[tusername]', 
                                                    '$_POST[tpassword]', 
                                                    '$_POST[tlevel]') ");
if($sadmin){
    echo "<script>alert('Simpan Data Admin Berhasil!');
    document.location='admin_user.php';
    </script>";
} else{
    echo "<script>alert('Simpan Gagal!');
    document.location='admin_user.php';
    </script>";
}

}



// tambah data User
if(isset($_POST['suser'])){
    $simpan = mysqli_query($koneksi, "INSERT INTO admin_kalla(nama_lengkap, email, no_hp, alamat, username, kata_sandi, tingkat) VALUES(
                                                    '$_POST[tnama]', 
                                                    '$_POST[temail]', 
                                                    '$_POST[thp]', 
                                                    '$_POST[talamat]', 
                                                    '$_POST[tusername]', 
                                                    '$_POST[tpassword]', 
                                                    '$_POST[tlevel]') ");
if($sadmin){
    echo "<script>alert('Simpan Data Admin Berhasil!');
    document.location='admin_user.php';
    </script>";
} else{
    echo "<script>alert('Simpan Gagal!');
    document.location='admin_user.php';
    </script>";
}

}



//Uji jika tombol Hapus di klik
if (isset($_POST['bdelete'])) {

    //persiapan Hapus Data
    $hapus = mysqli_query($koneksi, "DELETE FROM admin_kalla WHERE id_admin = '$_POST[id_admin]'");


    //jika Hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data Sukses!');
                document.location='admin_user.php';
             </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='admin_user.php';
             </script>";
    }
}




// PROSES DATA PENMPANG/

if(isset($_POST['btiket'])){

    $direktori = "bukti_tf/";
    $file_name = $_FILES['bukti_tf']['name'];
    move_uploaded_file($_FILES['bukti_tf']['tmp_name'],$direktori.$file_name);

    $datas = $_POST['tkursi'];
    $allData = implode(",",$datas);         

    $save = mysqli_query($koneksi, "INSERT INTO penumpang(kode_bus, tanggal, kelas, harga, kota_asal, kota_tujuan, nama_lengkap, nik, email, jumlah_tiket, pembayaran, kursi, no_tiket) VALUES(
                                                    '$_POST[tkode]', 
                                                    '$_POST[ttanggal]', 
                                                    '$_POST[tkelas]', 
                                                    '$_POST[tharga]', 
                                                    '$_POST[tasal]', 
                                                    '$_POST[ttujuan]', 
                                                    '$_POST[tnama]',
                                                    '$_POST[tnik]',
                                                    '$_POST[temail]',
                                                    '$_POST[tjumlah]',
                                                    '$_POST[tpembayaran]',
                                                    '$allData',
                                                    '$tiketauto') ");

    
    $hasil =$_POST['tjumlah']*$_POST['tharga'];
    $hasil_akhir= "Rp.". number_format($hasil,2,',','.');

    $save = mysqli_query($koneksi, "INSERT INTO transaksi(nama_lengkap, tanggal, jam_keberangkatan, kota_asal, kota_tujuan, email, kode_bus, kelas, harga, jumlah_tiket, bank, total_harga, kode_va, bukti_tf, no_tiket) VALUES(
                                                    '$_POST[tnama]',
                                                    '$_POST[ttanggal]',
                                                    '$_POST[tjam]',
                                                    '$_POST[tasal]', 
                                                    '$_POST[ttujuan]', 
                                                    '$_POST[temail]',
                                                    '$_POST[tkode]',
                                                    '$_POST[tkelas]',
                                                    '$_POST[tharga]',
                                                    '$_POST[tjumlah]', 
                                                    '$_POST[tpembayaran]',
                                                    '$hasil',
                                                    '$kodeauto', 
                                                    '$file_name',
                                                    '$tiketauto') ");

    $datas = $_POST['tkursi'];
    $allData = implode(" - ",$datas);                              
    $save = mysqli_query($koneksi, "UPDATE kursi SET 
                                                        booked_seats = '$allData'
                                                    WHERE kode_bus = '$_POST[tkode]'
                                                    ");
if($save){
    echo "<script>alert('Pembayaran anda sebesar $hasil_akhir sedang diproses');
    document.location='tiket.php';
    </script>";
} else{
    echo "<script>alert('Simpan Gagal!');
    document.location='tiket.php';
    </script>";
}

}

?>