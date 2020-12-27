<?php
  include 'koneksi.php'; 

  $id_administrator = 11;

    $query = "DELETE FROM administrator WHERE id_administrator = $id_administrator";
    $exe = mysqli_query($conn,$query);
          
    
?>