<?php 
		include 'koneksi.php';
		$keyword =1;

		$data = mysqli_query($conn,"select * from hewan_mendapatkan_vaksin where id_hewan_mendapatkan_vaksin ='$keyword ';");
?>
