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
			#header img {
				display: inline-block;
			}
			#background {
				background-image: url("asd.jpg");
    				background-size: cover;
				background-repeat: no-repeat;
				width: 100%;
				height: 100%;
			}
			#body table {
				border: 1px solid #ddd;
				margin: 10px;
				border-collapse: collapse;
				background-color: white;
			}
			#body tr,th {
				border: 1px solid black;
				padding: 5px;
				background-color: white;
			}
			#body tr,td {
				border: 2px solid #549659;
				padding: 10px;
				padding-left: 12px;
				font-family: arial;
				color: white;
				font-size: 20px;
				background-color: #8cf794;;
			}
			#body a{
				background-color: #b6efa2;
				margin: 10px;
				text-decoration: none;
				padding: 3px;
				font-family: arial;
				transition: background-color 1s;
			}
			#body a:hover{
				background-color: #00BFA5;	
			}
			button {
				color: #0277BD;
				text-decoration: none;
				display: inline-block;
				font-family: sans;
				padding-left: 3px;
				font-size: 18px;
				background-color: #b6efa2;
				transition: font-size 1s, color 1s;
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
			<div id="body">
		<form action="proses_tambah_Member.php" method="POST">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="Nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat"></td>
				</tr>
				<tr>
					<td>Nomor Telepon</td>
					<td><input type="number" name="NoTelepon"></td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>
						<a href="Index-Member.php">Batal</a>
					</td>
					<td>
				      	<button type="submit">Submit</button>
					</td>
				</tr>
			</table>
		</form>
		</div>
		</div>
	</body>
</html>
