<!DOCTYPE html>
<html>
<head>
	<title>Form Artikel</title>
	<style type="text/css">
		body { 
				font-family:algerian; 
				font-size:15px; 
				margin: 0px;
    			padding: 0px;
    			background-image:url('nufel.jpg');
    			background-size: 100%;
    			color:white;
			}
		#container { 
				width:500px; 
				margin:50px auto; 
				border:0px solid #555; 
				box-shadow:0px 0px 2px #555; 
			}
		input[type="text"]{}
		input[type="text"], input[type=date], textarea { padding:5px; margin:2px 0px; border: 1px solid #777; width:450px;}
		input[type="submit"], input[type="reset"] { padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }
		  h1 {
		    text-align: center;
		    margin-top: 50px;
		  }
		  form {  
		    background-color: violet;
		    padding: 10px;
		    border-radius: 10px;
		    color:black;
		  }
		
		</style>
</head>
<body>
	<div id="container">
	<h1>Form Berita</h1>
		
		<form action="proses.php" method="post">
			<p>
				<b>Judul :</b><br>
				<input type="text" name="title"/>
			</p>
			<p>
				<b>Penulis :</b><br>
				<input type="text" name="author"/>
			</p>
			<p>
				<b>Lead :</b><br>
				<textarea name="abstraksi" rows="4" cols="30"></textarea>
			</p>
			<p>
				<b>Content :</b><br>
				<textarea name="konten" rows="8" cols="45"></textarea>
			</p>
			
			<p>
				<input type="submit" name="submit" value="Add" class="tombol"/> 
			   	<input type="reset" name="batal" value="Reset" class="tombol"/>
			</p>
		</form>
	</div>
</body>
</html>