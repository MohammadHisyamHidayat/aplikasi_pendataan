<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body style="background-image: url(kertas.jpg); background-size: cover;">
	<h3><p align="center">Selamat Datang Di Halaman Login | SMK Luqman Al Hakim Kudus</p></h3>
	<hr>
	<br>
	<form action="proses_login.php" method="POST">
<fieldset>
		<legend align="center"><h2>LOGIN</h2></legend>
		<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan Nama..." required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan Password..." required></td>	
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="Login"></td>
			</tr>
		</table>
		<br>
	<hr>
	<div align="center">Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</fieldset>
	</form>
</body>
</html>