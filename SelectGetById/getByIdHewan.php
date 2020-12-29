<?php 
		include 'koneksi.php';
        $keyword = 1;
		$data = mysqli_query($conn,"select * from hewan WHERE id_hewan = '$keyword'");
?>
