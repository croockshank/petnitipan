<?php
  include 'koneksi.php'; 

  $nama_kandang = "Kandang Kura Kura kecil";
  $id_shelter = 2;
  $id_jenis_kandang = 1;

  $query = "insert into kandang(nama_kandang , id_shelter , id_jenis_kandang) values ('$nama_kandang','$id_shelter','$id_jenis_kandang')";
  $exe = mysqli_query($conn,$query);

  if ($exe) {
      echo "Sukses";
    } else {
      echo "Gagal";
    }

?>