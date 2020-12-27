<?php
  include 'koneksi.php'; 

  $id_makanan = 11;

    $query = "DELETE FROM makanan WHERE id_makanan = $id_makanan";
    $exe = mysqli_query($conn,$query);

    if(!$exe){
        echo "Data Masih Digunakan";
    }
?>