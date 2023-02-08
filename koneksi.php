<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "dbcrud_bus";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

?>