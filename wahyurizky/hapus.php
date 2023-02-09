<?php
include("koneksi.php");

$id_peminjam = $_GET['id_peminjam'];

mysqli_query($db,"DELETE FROM tb_mobil WHERE id_mobil='$id_peminjam'");
mysqli_query($db,"DELETE FROM tb_peminjam WHERE id_peminjam='$id_peminjam'");

if($query){
    header('location:data.php?status=sukses');
}else{
    header('location:data.php?status=sukses');
}

?>