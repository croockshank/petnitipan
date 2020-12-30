<?php
include '../koneksi.php'; 

$id_shelter=1;
$nama_shelter = "Pejanten Shelter";
$alamat = "Jalan Pejaten Barat No. 45T, RT.2/RW.8, West Pejaten, Pasar Minggu, South Jakarta City, Jakarta 12540";
$foto = "https://lh5.googleusercontent.com/p/AF1QipOTNh_H4Xo5tSvqdMcXXxoGMEc7ecy64OzYR462=w408-h544-k-no";
$keterangan = "Salah Satu Shelter Hewan terbaik Dijakarta , Dapat Menampung berbagai macam hewan";
$latitude = -6.277038643852861;
$longitude = 106.82554477579782;

$query = "UPDATE shelter SET nama_shelter = '$nama_shelter' , alamat = '$alamat' , foto = '$foto' , keterangan = '$keterangan' , latitude = '$latitude' , longitude ='$longitude' WHERE id_shelter = $id_shelter";
$exe = mysqli_query($conn,$query);

if ($exe) {
    echo "Sukses";
  } else {
    echo "Gagal";
  }
?>