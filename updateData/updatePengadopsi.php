<?php
include '../koneksi.php'; 

$id_pengadopsi =10;
$nama_pengadopsi = 90;
$alamat = "";
$no_telepon = "081234567890";
$email = "reynal12@gmail.com";



$query = "UPDATE pengadopsi SET nama-Pengadopsi = '$nama_pengadopsi', alamat = '$alamat' , no_telepon = '$no_telepon' ,email = '$email'  WHERE id_pengadopsi = $id_pengadopsi";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>