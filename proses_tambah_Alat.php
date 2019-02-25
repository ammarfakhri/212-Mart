<?php
include 'koneksi.php';
$nama 	= $_POST['Nama_Barang'];
$harga  = $_POST['Harga_Barang'];
$stok 	= $_POST['Stok_Barang'];
$tanggal 	= $_POST['tanggal'];

$sql = "insert into Barang_AlatKebersihan (Nama_Barang, Harga_Barang, Stok_Barang, tanggal) values ('$nama','$harga','$stok','$tanggal')";
mysqli_query($connect,$sql);

header('location:Index-Barang.php');
?>
