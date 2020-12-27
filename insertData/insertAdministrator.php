<?php
  include 'koneksi.php'; 

  $nama = "Reynaldi";
  $username = "reynaldi19";
  $password = 12345;
  $id_shelter = 3;

  $password_enc = password_hash($password,PASSWORD_DEFAULT);
  echo "Password : ".$password_enc;

  $query = "insert into administrator(nama,username,password,id_shelter) values ('$nama','$username','$password','$id_shelter')";
  $exe = mysqli_query($conn,$query);

  if ($exe) {
      echo "Sukses";
    } else {
      echo "Gagal";
    }

?>