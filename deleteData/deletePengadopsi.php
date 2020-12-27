<?php
  include 'koneksi.php'; 

  $id_pengadopsi = 3;

    $query = "DELETE FROM pengadopsi WHERE id_pengadopsi = $id_pengadopsi";
    $exe = mysqli_query($conn,$query);

    if(!$exe){
        echo "Data Masih Digunakan digunakann di Table Pegeadopsi Mengadopsi Hewan";
    }
?>