<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<h1>Tampil Data</h1>
	<a href="tambah.php">Tambah Data</a>
	<table border="1">
		<tr>
			<td>Nama Produk</td>
			<td>Keterangan</td>
			<td>Harga</td>
			<td>Jumlah</td>
			<td>Aksi</td>
		</tr>
		<?php 
		include 'koneksi.php';
		$sql = mysqli_query($con, "SELECT * FROM produk");
		while ($d = mysqli_fetch_array($sql)) { ?>
			<tr>
				<td><?= $d['nama_produk']; ?></td>
				<td><?= $d['keterangan']; ?></td>
				<td><?= $d['harga']; ?></td>
				<td><?= $d['jumlah']; ?></td>
				<td>
					<a href="edit.php?nama_produk=<?=$d['nama_produk']?>">Edit</a>
					<a href="hapus.php?nama_produk=<?=$d['nama_produk']?>">Hapus</a>
				</td>
			</tr>
		<?php   } ?>
	</table>
</body>
</html>