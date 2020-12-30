<?php
include '../koneksi.php'; 

$id_vaksin =1;
$nama_vaksin = "Immune Booster Cat";
$jumlah = 40;
$harga_satuan = 80000;
$id_jenis_hewan =1;
$id_shelter = 2;

$query = "UPDATE vaksin SET nama_vaksin = '$nama_vaksin', jumlah = $jumlah , harga_satuan = $harga_satuan , id_jenis_hewan = $id_jenis_hewan , id_shelter = '$id_shelter'  WHERE id_vaksin = $id_vaksin";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>