<?php 
		include 'koneksi.php';
		$keyword =1;

		$data = mysqli_query($conn,"select * from vaksin where id_vaksin ='$keyword'");
?>
