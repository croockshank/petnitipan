<?php
  include 'koneksi.php'; 

  $id_jenis_hewan = 14;

    $query = "DELETE FROM jenis_hewan WHERE id_jenis_hewan = $id_jenis_hewan";
    $exe = mysqli_query($conn,$query);

    if(!$exe){
        echo "Data Masih Digunakan";
    }
?>