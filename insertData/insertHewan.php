<?php
  include 'koneksi.php'; 

  $nama_hewan = "Guguk";
  $jenis_kelamin = "Laki Laki";
  $panjang = 50;
  $berat = 5.5 ;
  $id_jenis_hewan = 2;
  $tanggal_masuk ="2020-12-19";
  $status = 1;
  $foto = "Ini Link Foto";
  $id_kandang = 3;
  $id_shelter = 4;

    $query = "insert into hewan(nama_hewan ,jenis_kelamin , panjang , berat , id_jenis_hewan , tanggal_masuk , status , foto , id_kandang , id_shelter ) values ('$nama_hewan','$jenis_kelamin','$panjang','$berat','$id_jenis_hewan','$tanggal_masuk','$status','$foto','$id_kandang','$id_shelter')";
    $exe = mysqli_query($conn,$query);
          
?>