<?php
  include 'koneksi.php'; 

  $id_vaksin = 10;

    $query = "DELETE FROM vaksin WHERE id_vaksin = $id_vaksin";
    $exe = mysqli_query($conn,$query);

    if(!$exe){
        echo "Data Masih Digunakan digunakann di Table Pegeadopsi Mengadopsi Hewan";
    }
?>