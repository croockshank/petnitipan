<?php
  include 'koneksi.php'; 

  $id_pengadopsi_mengadopsi_hewan = 2;

    $query = "DELETE FROM pengadopsi_mengadopsi_hewan WHERE id_pengadopsi_mengadopsi_hewan = $id_pengadopsi_mengadopsi_hewan";
    $exe = mysqli_query($conn,$query);

   
?>