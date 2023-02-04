<?php

include "koneksi.php";
$id= $_GET['id'];
$tampil = mysqli_query ($mysqli, "select * from admin where id='$id'");
$hasil= mysqli_fetch_array ($tampil);
?>
<body style="background-image: url(kertas.jpg); background-size: cover;">
<form action="proses_edit.php" method="post">
	<fieldset>
		<legend>Edit</legend>
		<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="hidden" name="id" value="<?php echo $hasil['id']?>">
				<input type="text" name="nama" value="<?php echo $hasil['nama']?>">
			</td>
		</tr>
		<tr>
			<td>Tanggal Event</td>
			<td>:</td>
			<td> <input type="date" name="tanggal" value="<?php echo $hasil ['tanggal']?>"></td>
		</tr>
		<tr>
			<td>Informasi</td>
			<td>:</td>
			<td><input type="text"  name="informasi" value="<?php echo $hasil['informasi']?>"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim" value="Edit"></td>
		</tr>
	</table>
</form>
</fieldset></form>
</body>