<?php
  include 'koneksi.php'; 

  $id_jenis_kandang = 11;

    $query = "DELETE FROM jenis_kandang WHERE id_jenis_kandang = $id_jenis_kandang";
    $exe = mysqli_query($conn,$query);

    if(!$exe){
        echo "Data Masih Digunakan";
    }
?>