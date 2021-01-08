<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body background="bg.png">
	<div class="container">
		<div class="alert alert-info">Tambah Data</div>

		<?php 

		require '../connection.php';
		if (isset($_POST['simpan'])) {
			$input_nim= $_POST['txtnim'];
			$input_nama = $_POST['txtnama'];
			$input_prodi = $_POST['txtprodi'];
			$input_alamat= $_POST['txtalamat'];

			$query = "INSERT INTO mahasiswa VALUES('$input_nim','$input_nama','$input_prodi','$input_alamat')";
			$result = mysqli_query($link, $query);

			if ($result) {

				header('location: mahasiswa.php');
				# code...
			} else {

				echo 'Gagal disimpan :' . mysqli_error($link) ;
			}
			# code...
		}


		 ?>


		<form  action="" method="post">
			<div class="form-group">
				<label for="">NIM</label>
				<input type="text" class="form-control" name="txtnim">
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama">
			</div>
			<div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" name="txtprodi">
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat">
			</div>

			<input type="submit" class="btn btn-primary"
					name="simpan" value="Simpan Data">

			<a href="mahasiswa.php" class="btn btn-warning">Batal</a>

		</form>
	</div>

</body>
</html>