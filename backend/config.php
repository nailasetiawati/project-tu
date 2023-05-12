<?php
$hostname = "localhost";
$dbname   = "tu-app";
$username = "root";
$password = "";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);

if (!$koneksi) {
    die("Koneksi Gagal!" . mysqli_connect_error());
}else{
    // echo "Koneksi Berhasil!";
}
