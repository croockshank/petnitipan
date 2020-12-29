<?php 
		include 'koneksi.php';
		$keyword =1;
		$data = mysqli_query($conn,"select * from administrator WHERE id_administrator = '$keyword'");
?>
