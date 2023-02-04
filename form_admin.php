<!DOCTYPE html>
<html>
<head>
	<title>Form Admin</title>
</head>
<body style="background-image: url(kertas.jpg); background-size: cover;">
	<p>Selamat Datang Di Halaman Admin | SMK Luqman Al Hakim Kudus</p>
	<hr>
	<form action="proses_admin.php" method="POST">
<fieldset>
	<legend>Admin</legend>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukkan Nama..." required></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal" required></td>
		</tr>
		<tr>
			<td>Informasi</td>
			<td>:</td>
			<td>
				<textarea name="informasi" rows="1" cols="0" placeholder="Masukkan Info..." required></textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Daftar"></td>
		</tr>
	</table>
	<br>
	<a href="admin.php">Kembali</a>
	<br>
	<hr>
	<div align="center">copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</fieldset>
	</form>
</body>
</html>