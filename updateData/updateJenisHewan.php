<?php
include '../koneksi.php'; 

$id_jenis_hewan =3;
$nama_jenis_hewan = "Tupaai";
$icon = "fas fa-squirrel";


$query = "UPDATE jenis_hewan SET nama_jenis_hewan = '$nama_jenis_hewan' , icon = '$icon' WHERE id_jenis_hewan = $id_jenis_hewan";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>