<?php
include '../koneksi.php'; 

$id_makanan =1;
$nama_makanan = "Whiskas";
$jumlah = 10000;
$harga_satuan = 300;
$id_jenis_hewan =1;
$id_shelter = 8;

$query = "UPDATE makanan SET nama_makanan = '$nama_makanan', jumlah = $jumlah , harga_satuan = $harga_satuan , id_jenis_hewan = $id_jenis_hewan , id_shelter = '$id_shelter'  WHERE id_makanan = $id_makanan";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>