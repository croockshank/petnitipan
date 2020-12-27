<?php
  include 'koneksi.php'; 

  $nama_vaksin = "Vaksin Mamalia";
  $harga_satuan = 100000;
  $jumlah = 30;
  $id_jenis_hewan=3 ;
  $id_shelter = 4;

    $query = "insert into vaksin(nama_vaksin , harga_satuan , jumlah , id_jenis_hewan , id_shelter ) values ('$nama_vaksin','$harga_satuan','$jumlah','$id_jenis_hewan','$id_shelter')";
    $exe = mysqli_query($conn,$query);
          
?>