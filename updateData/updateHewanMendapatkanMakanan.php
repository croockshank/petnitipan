<?php
include '../koneksi.php'; 

$id_hewan_mendapatkan_makanan =4;
$id_hewan = 4;
$id_makanan = 1;
$jumlah = 100;
$waktu = "2020-11-23";


$query = "UPDATE hewan_mendapatkan_makanan SET id_hewan = '$id_hewan' , id_makanan = '$id_makanan' , jumlah = '$jumlah', waktu = '$waktu' WHERE id_hewan_mendapatkan_makanan = $id_hewan_mendapatkan_makanan";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>