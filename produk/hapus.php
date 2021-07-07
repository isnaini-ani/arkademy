<?php 
$nama_produk = $_GET['nama_produk'];
include 'koneksi.php';
$sql = mysqli_query($con, "DELETE FROM produk WHERE nama_produk = '$nama_produk'");
if ($sql) {
	header("location:index.php?BERHASIL");
}else{
	echo "gagal";
}
?>