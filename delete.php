<?php 
	include 'koneksi.php';
	
	$idArtikel = $_GET['id'];
	
	$query = mysqli_query($koneksi,"DELETE FROM tbl_artikel WHERE id='$idArtikel'");

	if ($query) {
		echo "<center>Artikel berhasil dihapus<br></center>";
 		echo "<center><a href='edit.php'>Back</a></center>"; 		
	}

 ?>