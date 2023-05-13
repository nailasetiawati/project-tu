<?php
include '../../backend/config.php';
$name = $_POST['name'];
// var_dump($name);
$query = mysqli_query($koneksi, "INSERT INTO `class`(`id`, `name`) VALUES ('', '$name')");
if($query == true){
    header("location:admin/dashboard.php");
}else{
    echo "gagal";
}
?>