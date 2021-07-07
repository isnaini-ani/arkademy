<!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form action="" method="POST">
		Nama Produk :<br>
		<input type="text" name="nama_produk"><br>
		Keterangan :<br>
		<input type="text" name="keterangan"><br>
		Harga :<br>
		<input type="number" name="harga"><br>
		Jumlah :<br>
		<input type="number" name="jumlah"><br><br>
		<input type="submit" name="tambah" value="tambah data"><br>
	</form>
	<?php 
	if(isset($_POST['tambah'])){
		$nama_produk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

		include 'koneksi.php';
		$sql = mysqli_query($con, "INSERT INTO produk VALUES('$nama_produk','$keterangan','$harga','$jumlah')");
		if ($sql) {
			header("location:index.php?BERHASIL");
		}else{
			echo "gagal";
		}
	} ?>
</body>
</html>