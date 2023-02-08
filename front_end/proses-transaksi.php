<?php

include "koneksi.php";

$sql = mysqli_query($koneksi, "SELECT max(urut) as maxURUT from transaksi");
$data = mysqli_fetch_array($sql);

$kode = $data['maxURUT'];

$kode++;
$ket = date("Ymd");
$kodeauto = $ket . sprintf("%03s", $kode);


?>