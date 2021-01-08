<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body background="bg.png">

	<div class="container">
		<div class="alert alert-info">Data Dosen</div>


		<a href="create.php" class="btn btn-info">Tambah Data</a>
		<br><br>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php

				include("koneksi.php");
				$no=1;
				$query = "SELECT * FROM dosen";

				$result = mysqli_query($link, $query);
				while ($isi= mysqli_fetch_object($result)) {
					# code...
				?>
				<tr>

				<td><?=$no++; ?></td>
				<td><?=$isi->nip; ?></td>
				<td><?= $isi->nama_dosen; ?></td>
				<td><?= $isi->alamat; ?></td>
				
				<td>
					<a href="delete.php?nip=<?php echo $isi->nip; ?>" class="btn btn-danger">Delete</a>

					<a href="update.php?url_nip=<?php echo $isi->nip; ?>" class="btn btn-warning">Edit</a>
				</td>
				
				</tr>
				
				<?php } ?>

				
			</tbody>
		</table>
	</div>

</body>
</html>