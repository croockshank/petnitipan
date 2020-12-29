<?php 
		include 'koneksi.php';
		$keyword =1;

		$data = mysqli_query($conn,"select * from pengadopsi_mengadopsi_hewan where id_pengadopsi_mengadopsi_hewan ='$keyword'");
?>
