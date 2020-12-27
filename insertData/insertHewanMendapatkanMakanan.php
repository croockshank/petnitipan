<?php
  include 'koneksi.php'; 

  $id_hewan = 7;
  $id_makanan = 1;
  $jumlah = 120;
  $waktu = "2020-12-19";
 

    $query = "insert into hewan_mendapatkan_makanan(id_hewan , id_makanan , jumlah , waktu  ) values ('$id_hewan','$id_makanan','$jumlah','$waktu')";
    $exe = mysqli_query($conn,$query);
          
?>