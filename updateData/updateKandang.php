<?php
include '../koneksi.php'; 

$id_kandang =2;
$nama_kandang = "Kandang Tupai Besar";
$id_shelter = 1;
$id_jenis_kandang = 5;


$query = "UPDATE kandang SET nama_kandang = '$nama_kandang' , id_shelter = $id_shelter , id_jenis_kandang = '$id_jenis_kandang'  WHERE id_kandang= $id_kandang";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>