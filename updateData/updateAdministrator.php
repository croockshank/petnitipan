<?php
include 'koneksi.php'; 

$id_administrator =1;
$nama = "Reynaldi Ramadhani";
$username = "reynaldi19";
$password = 12345;

$password_enc = password_hash($password,PASSWORD_DEFAULT);
echo "Password : ".$password_enc;

if($username != null && $password_enc != null){
    $query = "UPDATE administrator SET nama = '$nama' , username = '$username' , password = '$password_enc' WHERE id_administrator = $id_administrator";
    $exe = mysqli_query($conn,$query);

    if ($exe) {
        echo "Sukses";
      } else {
        echo "Gagal";
      }
}else{
    echo "Masukan username atau password";
}



?>