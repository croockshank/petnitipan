<?php
  include 'koneksi.php'; 

  $nama_jenis_hewan = "Jerapah";
  $icon = 2;
  $id_jenis_kandang = 1;
  $data_ada ;

        $data = mysqli_query($conn,"select * from jenis_hewan");
		while($d = mysqli_fetch_array($data)){
            if ($d['nama_jenis_hewan'] == $nama_jenis_hewan) {
               $data_ada=true;
               break;
            }else{
                $data_ada=false;
            }
            ?>
		<?php
        }

        if ($data_ada == true) {    
            echo "Data ".$nama_jenis_hewan." Sudah Ada!!";
        }else{
            $query = "insert into jenis_hewan(nama_jenis_hewan , icon ) values ('$nama_jenis_hewan','$icon')";
            $exe = mysqli_query($conn,$query);
            echo "Data Masuk";
        }
?>