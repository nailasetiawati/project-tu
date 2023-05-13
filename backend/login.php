<?php
include 'config.php';
$email = $_POST['email'];
$password = md5($_POST['password']);

$cekData = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' and password='$password'");
$cekJumlah = mysqli_num_rows($cekData);
 if ($cekJumlah > 0) {
	$query = mysqli_fetch_array($cekData);
    session_start();
    $_SESSION['email'] = $query['email'];
    $_SESSION['name'] = $query['name'];
	$_SESSION['status'] = "login";
	header("location:../admin/dashboard.php");
}else{
	header("location:index.php");	
}