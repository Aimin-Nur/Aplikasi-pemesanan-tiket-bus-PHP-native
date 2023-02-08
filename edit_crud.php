<?php

include "koneksi.php";

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
    $sadmin  = mysqli_query($koneksi, "INSERT INTO admin_kalla(nama_lengkap, email, no_hp, alamat, username, kata_sandi, tingkat) VALUES(
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
    $sadmin = mysqli_query($koneksi, "INSERT INTO admin_kalla(nama_lengkap, email, no_hp, alamat, username, kata_sandi, tingkat) VALUES(
                                                    '$_POST[tnama]', 
                                                    '$_POST[temail]', 
                                                    '$_POST[thp]', 
                                                    '$_POST[talamat]', 
                                                    '$_POST[tusername]', 
                                                    '$_POST[tpassword]', 
                                                    '$_POST[tlevel]') ");
if($sadmin){
    echo "<script>alert('Simpan Data Admin Berhasil!');
    document.location='user-admin.php';
    </script>";
} else{
    echo "<script>alert('Simpan Gagal!');
    document.location='user-admin.php';
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
    $save = mysqli_query($koneksi, "INSERT INTO penumpang(kode_bus, tanggal, kelas, harga, kota_asal, kota_tujuan, nama_lengkap, nik, email, jumlah_tiket, pembayaran, kursi) VALUES(
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
                                                    '$_POST[tkursi]') ");
if($save){
    echo "<script>alert('Simpan Rute Bus Berhasil!');
    document.location='table.php';
    </script>";
} else{
    echo "<script>alert('Simpan Gagal!');
    document.location='table.php';
    </script>";
}

}



?>