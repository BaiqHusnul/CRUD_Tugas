<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="web";

$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$link){
	die ("Koneksi Dengan Databases Gagal : ".mysqli_connect_errno().
		"_".mysqli_connect_error());
}
?>