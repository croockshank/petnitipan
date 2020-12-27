<table border="1">
		<tr>
			<th>NO</th>
            <th>ID Shelter</th>
			<th>Nama Shelter</th>
			<th>Alamat</th>
			<th>Foto</th>
			<th>Keterangan</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from shelter");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_shelter']; ?></td>
				<td><?php echo $d['nama_shelter']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['foto']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>

				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>