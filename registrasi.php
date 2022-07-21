<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi Form Rental</title>
	<link rel="stylesheet" type="text/css" href="Registrasi.css">
	<form name="form1" method="post" action="proses.php" action="lihat.php">
</head>
<body>
	<div class="login-box">
		<img src="https://img.freepik.com/free-vector/isometric-online-registration-concept_23-2147990224.jpg?size=338&ext=jpg&ga=GA1.2.1695307164.1657986922" class="avatar"/>
		<h1>Registrasi Here</h1>
		<form>
			<p>Nama Lengkap</p>
			<input type="text" name="Username" id="Username" placeholder="Enter Username">
			<p>Alamat</p>
			<input type="text" name="Alamat" id="Alamat"placeholder="Enter Address">
			<p>No HP</p>
			<input type="text" name="NoHandphone" id="NoHandphone"placeholder="Enter Number">
			<p>Jenis Mobil</p><br>
				<td><select name="Jenis" id="Jenis">
					<option>ayla</option>
					<option>brio</option>
					<option>Avanza</option>
					<option>fortuner</option>
					<option>Xenia</option>
					<option>yaris</option>
					<option>alphard</option>
					<option>pajero</option>
				</select>
				</td>
				<br><br>
			<p>Berapa Lama</p>
			<input type="text" name="Estimasi" id="Estimasi" placeholder="Estimasi peminjaman">
			<input type="submit" name="submit" value="Register">
		</form>
	</form>
	</div>
</body>
</html>