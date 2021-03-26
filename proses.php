<?php 	
	include 'koneksi.php';
	

	$judul = $_POST['title'];
	$penulis = $_POST['author'];
	$lead = $_POST['abstraksi'];
	$content = $_POST['konten'];

	$leadReplace = str_replace("\r\n", "<br>", "$lead");

	$contentReplace = str_replace("\r\n", "br>", "$content");

	$query = mysqli_query($koneksi, "INSERT INTO tbl_artikel VALUES('','$judul', '$penulis', '$lead', '$content')") or die (mysqli_error($koneksi,$query));

	if ($query) {
		echo "<h3 align=center>Proses Penambahan Artikel Berhasil</h3>";
		echo "
		<center>
		<a href='\ntampilkan.php'>List</a>
		</center>'";
	}else{
		echo "<h2 align=center>Proses Penambahan Artikel Gagal</h2>";
	}
 ?>