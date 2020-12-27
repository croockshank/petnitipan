<?php
  include 'koneksi.php'; 

  $nama_makanan = "Whsikas Susu";
  $harga_satuan = 630;
  $jumlah = 12000;
  $id_jenis_hewan= 1 ;
  $id_shelter = 1;

    $query = "insert into makanan(nama_makanan , harga_satuan , jumlah , id_jenis_hewan , id_shelter ) values ('$nama_makanan','$harga_satuan','$jumlah','$id_jenis_hewan','$id_shelter')";
    $exe = mysqli_query($conn,$query);
          
?>