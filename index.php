
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>

<body>
	<header>
		<h1><center> Data Nama Produk</center></h1>
	</header>
	
	<nav>
		<a href="form-daftar.php"><center>[+] Tambah Baru</center></a>
	</nav>
	
	<br>
	
	<table border="1" align="center"> 
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th colspan="2">Aksi</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		include("config.php");
		$sql = "SELECT * FROM produk";
		$query = mysqli_query($db, $sql);
		
		while($prodok = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$prodok['id']."</td>";
			echo "<td>".$prodok['nama_produk']."</td>";
			echo "<td>".$prodok['keterangan']."</td>";
			echo "<td>".$prodok['harga']."</td>";
			echo "<td>".$prodok['jumlah']."</td>";

			echo "<td>";
			echo "<a href='form-edit.php?id=".$prodok['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$prodok['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p align="center">Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
