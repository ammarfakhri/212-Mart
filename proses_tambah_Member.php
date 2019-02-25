<?php
include 'koneksi.php';
$Nama 		= $_POST['Nama'];
$Alamat  	= $_POST['Alamat'];
$NoTelepon	= $_POST['NoTelepon'];
$email 		= $_POST['email'];
$Tanggal	= date('Y-m-d');

$sql = "insert into Barang_Member (Nama, Alamat, NoTelepon, email, Tanggal) values ('$Nama','$Alamat','$NoTelepon','$email','$Tanggal')";
mysqli_query($connect,$sql);

header('location:Index-Member.php');
?>
