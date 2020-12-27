<?php
  include 'koneksi.php'; 

  $id_hewan = 7;
  $id_vaksin = 3;
  $jumlah = 1;
  $waktu = "2020-12-19";
 

    $query = "insert into hewan_mendapatkan_vaksin(id_hewan , id_vaksin , jumlah , waktu  ) values ('$id_hewan','$id_vaksin','$jumlah','$waktu')";
    $exe = mysqli_query($conn,$query);
          
?>