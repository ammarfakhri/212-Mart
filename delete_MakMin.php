<?php
include 'koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM Barang_MakMin WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:Index-Barang.php');
?>
