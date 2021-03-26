<?php
include "koneksi.php";


		$ID = $_POST['idartikel'];
		$judul = $_POST['title'];
		$penulis = $_POST['author'];
		$lead = $_POST['abstraksi'];
		$content = $_POST['konten'];
		


		$update="UPDATE tbl_artikel SET judul_artikel='$judul', penulis_artikel='$penulis', lead_artikel='$lead', content_artikel='$content' WHERE id='$ID'";
		$hasil=mysqli_query($koneksi,$update);

			if ($hasil) {

				echo "
					<font color='blue'>
						<center>
							<p>Artikel Berhasil Diupdate</p>
						</center>	
					</font>";
				echo "<center><a href='tampilkan.php'>List</a></center>";
			} else {
				echo "Artikel gagal di update";
			}
?>
