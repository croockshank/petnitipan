<?php
include '../koneksi.php'; 

$id_pengadopsi_mengadopsi_hewan =3;
$id_pengadopsi = 1;
$id_hewan =4;
$biaya = 700000;

$query = "UPDATE pengadopsi_mengadopsi_hewan SET id_pengadopsi = '$id_pengadopsi' , id_hewan = '$id_hewan' , biaya = $biaya  WHERE id_pengadopsi_mengadopsi_hewan = $id_pengadopsi_mengadopsi_hewan";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>