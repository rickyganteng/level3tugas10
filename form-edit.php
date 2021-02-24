<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$prodok = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>

<body>
	<header>
		<h1><center> Data Nama Produk</center></h1>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset align="center">
			
			<input type="hidden" name="id" value="<?php echo $prodok['id'] ?>" />
		
		<p>
			<label for="nama_produk">Nama Produk : </label>
			<input type="text" name="nama_produk" placeholder="nama lengkap" value="<?php echo $prodok['nama_produk'] ?>" />
		</p>
		<p>
			<label for="keterangan">Keterangan : </label>
			<textarea name="keterangan"><?php echo $prodok['keterangan'] ?></textarea>
		</p>
		<p>
			<label for="harga">Harga : </label>
			<input type="text" name="harga"  value="<?php echo $prodok['harga'] ?>" />
		</p>
		<p>
			<label for="jumlah">Jumlah : </label>
			<input type="text" name="jumlah" value="<?php echo $prodok['jumlah'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
