<?php 
		include 'koneksi.php';
		$keyword =1;

		$data = mysqli_query($conn,"select * from kandang where id_kandang='$keyword'");
?>
