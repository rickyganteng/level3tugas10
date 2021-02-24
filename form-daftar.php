<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>

<body>
	<header>
		<h1> <center> Data Nama Produk</center></h1>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset align="center">
		
		<p>
			<label for="nama_produk">Nama Produk : </label>
			<input type="text" name="nama_produk" placeholder="nama produk" />
		</p>
		<p>
			<label for="Keterangan">Keterangan : </label>
			<textarea name="keterangan"></textarea>
		</p>
		<p>
			<label for="harga">Harga: </label>
			<input type="text" name="harga"/>
		</p>
		</p>
		<p>
			<label for="jumlah">Jumlah : </label>
			<input type="text" name="jumlah" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
