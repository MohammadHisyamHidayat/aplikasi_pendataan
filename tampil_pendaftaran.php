<!DOCTYPE html>
<html>
<?php
	include "koneksi.php";
?>
<body style="background-image: url(kertas.jpg); background-size: cover;">
<head>
	<title>Daftar</title>
</head>
<body>
	<h3 align="center">HALAMAN DATA PESERTA</h3>
	<hr>
	<br>
	<table border="1" width="60%" align="center">
		<tr>
			<td align="center">Id</td>
			<td align="center">Nama</td>
			<td align="center">Tanggal Lahir</td>
			<td align="center">Alamat</td>
		</tr>
		<?php
			include "koneksi.php";
			$tampil = mysqli_query ($mysqli, "select * from pendaftaran");
			$no = 1;
			while ($hasil = mysqli_fetch_array($tampil)) {
			?>
		<tr>
			<td align="center"><?php echo $no++;?></td>
			<td align="center"><?php echo $hasil['nama'];?></td>
			<td align="center"><?php echo $hasil['tanggal_lahir'];?></td>
			<td align="center"><?php echo $hasil['alamat'];?></td>
		</tr>
		<?php
			}
		?>
	</table>
	<p align="center"><a href="admin.php">Kembali</a></p>
	<hr>
	<div align="center">Copiright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>