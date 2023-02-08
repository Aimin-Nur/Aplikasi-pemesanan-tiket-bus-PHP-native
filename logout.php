<?php
session_start();
$_SESSION['session_sername']== "";
$_SESSION['session_password']== "";
session_destroy();
header("location:login.php");