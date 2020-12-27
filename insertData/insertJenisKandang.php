<?php
  include 'koneksi.php'; 

  $luas = 90;

  $query = "insert into jenis_kandang(luas) values ('$luas')";
  $exe = mysqli_query($conn,$query);

  if ($exe) {
      echo "Sukses";
    } else {
      echo "Gagal";
    }

?>