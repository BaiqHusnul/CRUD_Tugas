<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
</head>
<body background="bg.png">
	<div class="container">
		<div class="alert" style="text-align : center"><h4>Sistem Informasi Mahasiswa Universitas Bumigora Mataram<br><br> <img src="ubg.png" alt="ubg" style="width:150px;height:150px;"></h4></div>

		<table class="table table-bordered">
		
		
			<thead>
				<td colspan="5" style="text-align: center; background-color: Grey;color: black"><b>Data Mahasiswa</b></td>
				<tr bgcolor="white">
					<th style="text-align: center;">No</th>
					<th style="text-align: center;">NIM</th>
					<th style="text-align: center;">Nama</th>
					<th style="text-align: center;">Prodi</th>
					<th style="text-align: center;">Alamat</th>
				</tr>
			</thead>
			<tbody>
				<?php

				include("connection.php");
				$no =1;
				$query = "SELECT * FROM mahasiswa";

				$result = mysqli_query($link, $query);
				while ($isi= mysqli_fetch_object($result)) {
					# code...
				?>
				<tr bgcolor="blue">

				<td><?= $no++; ?></td>
				<td><?= $isi->nim; ?></td>
				<td><?= $isi->nama_mahasiswa; ?></td>
				<td><?= $isi->prodi; ?></td>
				<td><?= $isi->alamat; ?></td>
	
				</tr>
				<?php } ?>
				
			</tbody>
		<table class="table table-bordered">
			<td><a href=""class="btn btn-danger">Delete</a> 
			<a href=""class="btn btn-warning">Upload</a></td>	</table>
	</div>

</body>
</html>