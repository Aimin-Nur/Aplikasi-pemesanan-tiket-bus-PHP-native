<?php
require('koneksi.php');
$id = $_GET['urut'];
$query_get = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE urut = '$id'");
$get_data = mysqli_fetch_array (Squery_get);
$a = $get_data['row_id'];
$b = $get_data[ 'jumlah_tiket'];
$get_br = mysq1i_query ($koneksi, "SELECT * FROM barang WHERE row_id = '$a'");
$data_br = mysqli_fetch_array($get_br);
$stok = $data_br['kapasitas'];
$total_stok = $stok - $b;
$query_up = mysqli_query ($koneksi, "UPDATE data_bus SET kapasitas = '$total_stok'");
// if ($query_up) {
// $query = mysqli_query($koneksi, "DELETE FROM transaksi _masuk WHERE id_tm =
// '$id'");
header('location: otomatis.php');


?>