<?php 
	
	$koneksi = mysqli_connect("localhost","root","","database_artikel" );

	if (!$koneksi) {
		die("Gagal Terhubung dengan database".mysqli_connect_error());
	}

 ?>