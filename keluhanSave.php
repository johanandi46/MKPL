<?php

require 'koneksi.php';

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
	$sql = "insert into keluhan (resi, nama_pengirim, jenis_kelamin, alamat, email, telp, jenis_keluhan, keluhan)
	values('".$_POST['resi']."', '".$_POST['nama']."', '".$_POST['jk']."', '".$_POST['email']."', '".$_POST['alamat']."', '".$_POST['notelp']."',
	'".$_POST['jenis']."', '".$_POST['keluhan']."')";

	$result = mysqli_query($conn, $sql);

	if ($result) {
		echo "<script>alert('Keluhan berhasil dikirim!'); window.location.replace('index.php');</script>";
	} else {
		echo "<script>alert('Kesalahan Sistem, Coba Lagi!'); window.location.replace('index.php');</script>";
	}
} else {
	echo "<script>alert('Kesalahan Sistem, Coba Lagi!'); window.location.replace('index.php');</script>";
}
