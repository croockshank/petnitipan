<?php 
		include 'koneksi.php';
		$keyword =1;

		$data = mysqli_query($conn,"select * from makanan where id_makanan = '$keyword'");
?>
