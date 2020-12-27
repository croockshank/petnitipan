<?php
  include 'koneksi.php'; 

  $id_shelter = 13;

    $query = "DELETE FROM shelter WHERE id_shelter = $id_shelter";
    $exe = mysqli_query($conn,$query);

    if(!$exe){
        echo "Data Masih Digunakan digunakann di Table Pegeadopsi Mengadopsi Hewan";
    }
?>