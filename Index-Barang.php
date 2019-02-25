<!DOCTYPE html>
<html>
	<head>
		<title>212 Mart Barang</title>
		<style>
			.wrapper  {
				max-width: 1200px;
				box-sizing: border-box;
				margin: auto;
			}
			#header {
				background-color: #8cb5f7;
				padding: 25px;
				max-height: 100px;
				box-sizing: border-box;
			}
			#header ul li{
				display: inline-block;
				padding-left: 15px;
			}
			#header ul li a{
				color: white;
				text-decoration: none;
				display: inline-block;
				font-family: sans;
				padding-left: 3px;
				font-size: 18px;
				transition: font-size 1s, color 1s, text-shadow 1s;
			}
			#header ul li a:hover {
				color: #0277BD;
				font-size: 20px;
				text-shadow: 2px 2px #c9cfd8;
			}
			#header ul li a.active {
				color: #0277BD;
			}
			#header img {
				display: inline-block;
			}
			#background {
				background-image: url("asd.jpg");
    			background-size: cover;
				background-repeat: no-repeat;
			}
			#body1 table {
				border: 1px solid #ddd;
				margin: 10px;
				border-collapse: collapse;
				background-color: white;
			}
			#body1 tr,td {
				border: 1px solid black;
				padding: 5px;
				background-color: white;
				color: #8cb5f7;
			}
			#body1 tr,td:hover {
				background-color: #8cb5f7;
				color: white;
			}
			#body1 tr,th {
				border: 2px solid #0277BD;
				padding: 10px;
				padding-left: 12px;
		    	color: white;
				font-family: arial;
				font-size: 18px;
				background-color: #8cb5f7;
			}
			#body1 a{
				background-color: #A7FFEB;
				margin: 15px;
				text-decoration: none;
				padding-top: 7px;
				padding-bottom: 7px;
				padding-left: 5px;
				padding-right: 5px;
				font-family: sans;
				transition: background-color 1s;
			}
			#body1 a:hover{
				background-color: #00BFA5;	
				}
		</style>
		</head>
		<body id="background">
		<div class="wrapper">
			<div id="header">
				<ul style="list-style-type:none;">
					<li><a href="Index-Home.php">Home</a>
					<li><a href="Index-Barang.php" class="active">Stok Barang</a>
					<li><a href="Index-Member.php">Kartu Member</a>
					<li><a href="profil.html">Profil</a>
				</ul>
			</div>
			<hr>
			<div id="body1">
				<a href="tambah_MakMin.php">Tambah Barang Makanan&Minuman</a>
				<p>
				<table>
				<tr>
					<th colspan="6">Barang Khusus Makanan&Minuman</th>
				</tr>
				<tr>
					<th>No</th>
					<th>Nama_Barang</th>
					<th>Harga_Barang</th>
					<th>Stok_Barang</th>
					<th>Tanggal_Pengiriman</th>
					<th>Edit&Hapus</th>
				</tr>
			<?php
			include 'koneksi.php';
			$nomor  = 1;
			$sql    = "select * from Barang_MakMin";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td><center>".$nomor++."</td>
						<td>".$row['Nama_Barang']."</td>
						<td>".$row['Harga_Barang']."</td>
						<td><center>".$row['Stok_Barang']."</td>
						<td><center>".$row['tanggal']."</td>
						<th>
							<a href='edit_MakMin.php?id=".$row['id']."'>Edit</a>
							<a href='delete_MakMin.php?id=".$row['id']."'>Hapus</a>
						</th>
					</tr>
					";
				}
			}
			?>
				</table>
			</div>
			<div id="body1">
				<a href="tambah_Alat.php">Tambah Barang AlatKebersihan</a>
				<p>
				<table id="bod">
				<tr>
					<th colspan="6">Barang Khusus AlatKebersihan</th>
				</tr>
				<tr>
					<th>No</th>
					<th>Nama_Barang</th>
					<th>Harga_Barang</th>
					<th>Stok_Barang</th>
					<th>Tanggal_Pengiriman</th>
					<th>Edit&Hapus</th>
				</tr>
			<?php
			include 'koneksi.php';
			$nomor  = 1;
			$sql    = "select * from Barang_AlatKebersihan";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td><center>".$nomor++."</td>
						<td>".$row['Nama_Barang']."</td>
						<td>".$row['Harga_Barang']."</td>
						<td><center>".$row['Stok_Barang']."</td>
						<td><center>".$row['tanggal']."</td>
						<th>
							<a href='edit_Alat.php?id=".$row['id']."'>Edit</a>
							<a href='delete_Alat.php?id=".$row['id']."'>Hapus</a>
						</th>
					</tr>
					";
				}
			}
			?>
				</table>
			</div>
		</div>
	</body>
</html>
