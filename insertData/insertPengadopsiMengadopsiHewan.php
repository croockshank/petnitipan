<?php
  include 'koneksi.php'; 

  $id_pengadopsi = 1;
  $id_hewan= "1";
  $biaya = 700000;
 

    $query = "insert into pengadopsi_mengadopsi_hewan(id_pengadopsi , id_hewan, biaya ) values ('$id_pengadopsi','$id_hewan','$biaya')";
    $exe = mysqli_query($conn,$query);
          
?>