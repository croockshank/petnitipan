<?php
include '../koneksi.php'; 

$id_jenis_kandang =10;
$luas = 90;


$query = "UPDATE jenis_kandang SET luas = '$luas'  WHERE id_jenis_kandang = $id_jenis_kandang";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>