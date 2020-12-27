<?php
  include 'koneksi.php'; 

  $id_kandang = 11;

    $query = "DELETE FROM kandang WHERE id_kandang = $id_kandang";
    $exe = mysqli_query($conn,$query);

    if(!$exe){
        echo "Data Masih Digunakan";
    }
?>