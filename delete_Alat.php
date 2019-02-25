<?php
include 'koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM Barang_AlatKebersihan WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:Index-Barang.php');
?>
