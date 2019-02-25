<?php
include 'koneksi.php';
$ID     = $_POST['id'];
$nama 	= $_POST['Nama_Barang'];
$harga  = $_POST['Harga_Barang'];
$stok 	= $_POST['Stok_Barang'];
$tanggal 	= $_POST['tanggal'];

$sql = "UPDATE Barang_AlatKebersihan SET Nama_Barang = '$nama', Harga_Barang = '$harga', Stok_Barang = '$stok', tanggal = '$tanggal' WHERE id = '$ID'";
mysqli_query($connect,$sql);

header('location:Index-Barang.php');
?>
