<?php
	require 'koneksi.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Keluhan Pelanggan</title>
	</head>
	<body>
	<a href="formPencarian.php">kembali ke pencarian resi</a>
	<?php
		$resi=$_POST['resi'];
		require 'koneksi.php';
		$query='select resi from ...';

	?>
	<form method="POST" action="keluhanSave.php">

	<table border="1">
	<th bgcolor="red">DETIL KIRIMAN</th>
		<tr><td>NO. KIRIMAN</td><td><input type="text" name="email" readonly></td></tr>
		<tr><td>KODE PRODUK</td><td><input type="text" name="alamat" readonly></td></tr>
		<tr><td>NAMA PENGIRIM BARANG</td><td><input type="text" name="alamat" readonly></td></tr>
		<tr><td>BERAT KIRIMAN</td><td><input type="text" name="beratKiriman" readonly>
		<tr><td>ISI KIRIMAN</td><td><input type="text" name="isiKiriman" readonly>
		<tr><td>STATUS AKHIR</td><td> <textarea readonly=""></textarea></td></tr>
	</table><br>

	<table border="1">
	<th bgcolor="red">IDENTITAS PENGADU</th>
		<tr><td>NAMA</td><td><input type="text" name="nama" required=""></td></tr>
		<tr><td>JENIS KELAMIN</td><td><input type="radio" name="jk" value="laki-laki" checked>
		laki-laki<input type="radio" name="jk" value="wanita">wanita</td></tr>
		<tr><td>EMAIL</td><td><input type="text" name="email" required></td></tr>
		<tr><td>ALAMAT</td><td><input type="text" name="alamat" required=""></td></tr>
		<tr><td>NO. TELP / HP</td><td><input type="text" name="notelp" required=""></td></tr>
	</table><br>

	<table border="1">
	<th bgcolor="red">ISIAN PENGADUAN</th>
		<tr><td>JENIS</td><td><select name="jenis" required>
		<option value="belum terima">belum terima</option>
		<option value="keterlambatan">keterlambatan</option>
		<option value="kehilangan">kehilangan</option>
		<option value="kiriman tidak utuh">kiriman tidak utuh</option>
		<option value="pengembalian(retur)">pengembalian(retur)</option>
		</select></td></tr>
		<tr><td>DESKRIPSI</td><td><textarea name="deskripsi"></textarea></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="KIRIM PENGADUAN"></td></tr>
	</table><br>

	</form>
	</body>
</html>
