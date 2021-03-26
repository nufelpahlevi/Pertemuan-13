<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Tampilkan</title>
</head>
<body style="text-align: center; background-image: url('tampilan.jpg'); background-size: 100%; color:white;	">

	<div class="container" style="margin-top: 20px;">
	<h2>List Artikel</h2>		
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Judul</th>
				<th scope="col">Penulis</th>
				<th scope="col">Lead</th>
				<th scope="col">Content</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<?php 
		// perintah query untuk menampilkan / mengambil data dari database
		$query = mysqli_query($koneksi, "SELECT * from tbl_artikel ORDER BY id desc");

		// while digunakan untuk id / no yang menggunakan tipe data int auto increment
		$no = 0;
		while ($data = mysqli_fetch_array($query)) {
			$no++
		 ?>
		 <tbody>
		 	<tr>
		 		<!-- perintah untuk menampilkan data yang sudah diambil dari database ke browser html -->
		 		<th scope="row"><?= $no; ?></th>
		 		<td><?= $data['judul_artikel'];?></td>
		 		<td><?= $data['penulis_artikel'];?></td>
		 		<td><?= $data['lead_artikel'];?></td>
		 		<td><?= $data['content_artikel'];?></td>
		 		<td>
		 			<a href="edit.php?id=<?= $data['id']?>" class="btn btn-primary">Edit</a>
		 			<a href="delete.php?id=<?= $data['id']?>" class="btn btn-danger" >Delete</a>
		 		</td>
		 	</tr>
		 </tbody>
		<?php } ?>
	</table>
</div>
</body>
</html>