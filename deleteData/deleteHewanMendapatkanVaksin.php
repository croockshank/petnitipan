<?php
  include 'koneksi.php'; 

  $id_hewan_mendapatkan_vaksin = 1;

    $query = "DELETE FROM hewan_mendapatkan_vaksin WHERE id_hewan_mendapatkan_vaksin = $id_hewan_mendapatkan_vaksin";
    $exe = mysqli_query($conn,$query);
          
    
?>