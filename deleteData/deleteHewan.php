<?php
  include 'koneksi.php'; 

  $id_hewan = 13;

    $query = "DELETE FROM hewan WHERE id_hewan = $id_hewan";
    $exe = mysqli_query($conn,$query);
          
    
?>