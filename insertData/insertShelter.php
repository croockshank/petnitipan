<?php
  include 'koneksi.php'; 

  $nama_shelter = "Whsikas Susu";
  $alamat = "Ini Alamat Lengkapnya";
  $foto = "Ini Link Foto";
  $keterangan = "Ini Keterangan nya" ;
  $latitude = 1;
  $longitude =4;

    $query = "insert into shelter(nama_shelter , alamat , foto , keterangan , latitude , longitude ) values ('$nama_shelter','$alamat','$foto','$keterangan','$latitude','$longitude')";
    $exe = mysqli_query($conn,$query);
          
?>