<?php
  include 'koneksi.php'; 

  $nama_pengadopsi = "Dimasqi";
  $alamat= "Jalan Nastrip Probolinggo";
  $no_telepon = "086757586789";
  $email = "dimasqi@gmail.com";
 

    $query = "insert into pengadopsi(nama_pengadopsi , alamat, no_telepon , email  ) values ('$nama_pengadopsi','$alamat','$no_telepon','$email')";
    $exe = mysqli_query($conn,$query);
          
?>