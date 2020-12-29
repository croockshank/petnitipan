<?php 
		include 'koneksi.php';
		$keyword =1;

		$data = mysqli_query($conn,"select * from pengadopsi where id_pengadopsi = '$keyword'");
?>
