<?php 
		include 'koneksi.php';

        $keyword = 1;
		$data = mysqli_query($conn,"select * from shelter WHERE id_shelter = '$keyword'");
?>
