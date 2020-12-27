<?php
  include 'koneksi.php'; 

  $id_hewan_mendapatkan_makanan = 3;

    $query = "DELETE FROM hewan_mendapatkan_makanan WHERE id_hewan_mendapatkan_makanan = $id_hewan_mendapatkan_makanan";
    $exe = mysqli_query($conn,$query);
          
    
?>