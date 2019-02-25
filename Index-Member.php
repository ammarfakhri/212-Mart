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
				background-color: #8cf794;
				padding: 25px;
				max-height: 100px;
				box-sizing: border-box;
				display: block;
			}
			#header .img {
				text-align: right;
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
				color: #02bd0b;
				font-size: 20px;
				text-shadow: 2px 2px #c9cfd8;
			}
			#header ul li a.active {
				color: #02bd0b;
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
				color: #8cf794;
			}
			#body1 tr,td:hover {
				background-color: #8cf794;
				color: white;
			}
			#body1 tr,th {
				border: 2px solid #549659;
				padding: 10px;
				padding-left: 12px;
		    	color: white;
				font-family: arial;
				font-size: 18px;
				background-color: #8cf794;
			}
			#body1 a{
				background-color: #9df2a4;
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
				background-color: #78ba7e;	
			}
			table {
				position: relative;
			}
		</style>
		</head>
		<body id="background">
		<div class="wrapper">
			<div id="header">
				<ul style="list-style-type:none;">
					<li><a href="Index-Home.php">Home</a>
					<li><a href="Index-Barang.php">Stok Barang</a>
					<li><a href="Index-Member.php" class="active">Kartu Member</a>
					<li><a href="profil.html">Profil</a>
				</ul>
			</div>
			<hr>
			<div id="body1">
				<a href="tambah_Member.php">Daftar Member 212Mart</a>
				<p>
				<table>
				<tr>
					<th colspan="6">Member 212Mart</th>
				</tr>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No.Telepeon</th>
					<th>E-mail</th>
					<th>Tanggal</th>
				</tr>
			<?php
			include 'koneksi.php';
			$nomor  = 1;
			$sql    = "select * from Barang_Member";
			$result = mysqli_query($connect,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td><center>".$nomor++."</td>
						<td>".$row['Nama']."</td>
						<td>".$row['Alamat']."</td>
						<td>".$row['NoTelepon']."</td>
						<td>".$row['email']."</td>
						<td>".date('Y-m-d',strtotime($row['Tanggal']))."</td>
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
