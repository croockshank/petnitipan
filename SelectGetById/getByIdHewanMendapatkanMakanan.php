<?php 
		include 'koneksi.php';
		$keyword =1;
		$data = mysqli_query($conn,"select * from hewan_mendapatkan_makanan WHERE id_hewan_mendapatkan_makanan = '$keyword'");
?>
