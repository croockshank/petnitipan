<?php 
		include 'koneksi.php';
		$keyword =1;
		$data = mysqli_query($conn,"select * from jenis_kandang where id_jenis_kandang = '$keyword'");
?>
