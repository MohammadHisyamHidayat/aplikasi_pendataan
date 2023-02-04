<!DOCTYPE html>
<html>
<?php
	include "koneksi.php";
?>
<body style="background-image: url(kertas.jpg); background-size: cover;">
<head>
	<title>Admin</title>
</head>
<body>
	<p align="center">Selamat Datang Di Halaman Admin Event | SMK Luqman Al Hakim Kudus</p>
	<hr>
	<p align="center">
		<a href="event.php">Event |</a>
		<a href="lobby.php">Logout</a>
	</p>
	<hr>
	<h3 align="center">DATA EVENT</h3>
	<p align="center"><a href="form_admin.php">+Tambah Daftar Event</a></p>
	<table border="1" width="50%" align="center">
		<tr>
			<td align="center">Id</td>
			<td align="center">Nama</td>
			<td align="center">Tanggal</td>
			<td align="center">Informasi</td>
			<td align="center">OPSI</td>
		</tr>
		<?php
			include "koneksi.php";
			$tampil = mysqli_query ($mysqli, "select * from admin");
			$no = 1;
			while ($hasil = mysqli_fetch_array($tampil)) {
			?>
		<tr>
			<td align="center"><?php echo $no++;?></td>
			<td align="center"><?php echo $hasil['nama'];?></td>
			<td align="center"><?php echo $hasil['tanggal'];?></td>
			<td align="center"><?php echo $hasil['informasi'];?></td>
			<td align="center">
				<a href="edit_admin.php?id=<?php echo $hasil ['id'];?>">Edit |</a>
				<a href="hapus.php?hapus&id=<?=$hasil['id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php 
			}
		?>
	</table>
	<p align="center"><a href="tampil_pendaftaran.php">-Data Peserta Event</a></p>
	<hr>
	<div align="center">Copiright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>