<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body style="background-image: url(kertas.jpg); background-size: cover;">
	<p align="center">Selamat Datang Di Halaman Pendaftaran</p>
	<hr>
	<form action="proses_pendaftaran.php" method="POST">
<fieldset>
	<legend>Pendaftaran</legend>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukkan Nama..." required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" placeholder="Masukkan Email..." required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="tanggal_lahir" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<textarea name="alamat" rows="1" cols="20" placeholder="Masukkan Alamat Anda..." required=""></textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim" value="Daftar"></td>
		</tr>
	</table>
	<br>
	<a href="lobby.php">Kembali</a>
</fieldset>	
	<br>
	<hr>
	<div align="center">copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
	</form>
</body>
</html>