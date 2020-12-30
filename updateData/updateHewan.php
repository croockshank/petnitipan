<?php
include '../koneksi.php'; 

$id_hewan =1;
$nama_hewan = "Shintaro";
$jenis_kelamin = "Laki Laki";
$panjang = 50;
$berat = 5.6;
$id_jenis_hewan = 1;
$tanggal_masuk ="2020-11-23";
$status = 1 ;
$foto ="";
$id_kandang =3;
$id_shelter = 10;


$query = "UPDATE hewan SET nama_hewan = '$nama_hewan' , jenis_kelamin = '$jenis_kelamin' , panjang = '$panjang', berat = $berat , id_jenis_hewan = '$id_jenis_hewan' , tanggal_masuk = '$tanggal_masuk' , status = $status  , foto = '$foto' ,id_kandang = '$id_kandang', id_shelter = '$id_shelter' WHERE id_hewan = $id_hewan";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>