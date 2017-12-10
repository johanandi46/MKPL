<?php
  if (isset($_POST)) {
    require 'koneksi.php';
    $conn = mysqli_connect($host, $user, $pass, $db);
    if ($conn) {

      $resi = $_POST['resi'];
      $lokasibarang = $_POST['lokasibarang'];
      $statuspengiriman = $_POST['statuspengiriman'];

      $sql = "INSERT INTO log_barang (resi, waktu, lokasi_barang, status_pengiriman)
      VALUES ('$resi', CURRENT_TIME(), '$lokasibarang', '$statuspengiriman')";

      var_dump($sql);
      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo "<script>alert('Berhasil!'); location.replace('admin.php')</script>";
      } else {
        echo "<script>alert('Gagal!'); location.replace('admin.php')</script>";
      }
    } else {
      echo "<script>alert('Gagal!'); location.replace('admin.php')</script>";
    }
  } else {
    echo "<script>alert('Gagal!'); location.replace('admin.php')</script>";
  }
?>
