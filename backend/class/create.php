<?php
include '../config.php';
$name = $_POST['name'];
// var_dump($name);
mysqli_query($koneksi, "INSERT INTO `class`(`id`, `name`) VALUES ('','$name')");

// if($query == true){
//     header("location:../../admin/class/index.php");
// }else{
//     echo "gagal";
// }
?>
