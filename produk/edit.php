<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<?php 
	include 'koneksi.php';
	$nama = $_GET['nama_produk'];
	$sql = mysqli_query($con, "SELECT * FROM produk WHERE nama_produk = '$nama'");
	while ($d = mysqli_fetch_array($sql)) {
	?>
</head>
<body>
	<h1>Edit Data</h1>
	<form action="" method="POST">
		Nama Produk :<br>
		<input type="text" name="nama_produk" value="<?=$d['nama_produk']?>"><br>
		Keterangan :<br>
		<input type="text" name="keterangan" value="<?=$d['keterangan']?>"><br>
		Harga :<br>
		<input type="number" name="harga" value="<?=$d['harga']?>"><br>
		Jumlah :<br>
		<input type="number" name="jumlah" value="<?=$d['jumlah']?>"><br><br>
		<input type="submit" name="edit" value="edit data"><br>
	</form>
	<?php 
	}
	if (isset($_POST['edit'])) {
		$nama_produk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

		$sql = mysqli_query($con, "UPDATE produk SET 
									nama_produk = '$nama_produk',
									keterangan = '$keterangan',
									harga = '$harga',
									jumlah = '$jumlah'
								WHERE nama_produk = '$nama_produk'");
		if ($sql) {
			header("location:index.php?BERHASIL");
		}else{
			echo "gagal";
		}
	}
	 ?>
</body>
</html>