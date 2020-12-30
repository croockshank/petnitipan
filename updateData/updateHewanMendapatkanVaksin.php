<?php
include '../koneksi.php'; 

$id_hewan_mendapatkan_vaksin =2;
$id_hewan = 3;
$id_vaksin = 1;
$jumlah = 3;
$waktu = "2020-11-23";


$query = "UPDATE hewan_mendapatkan_vaksin SET id_hewan = '$id_hewan' , id_vaksin = '$id_vaksin' , jumlah = '$jumlah', waktu = '$waktu' WHERE id_hewan_mendapatkan_vaksin = $id_hewan_mendapatkan_vaksin";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>