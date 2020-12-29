<?php 
		include 'koneksi.php';
		$keyword =1;
		$data = mysqli_query($conn,"select * from jenis_hewan where id_jenis_hewan ='$keyword'");
?>
