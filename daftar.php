<?php
  if (isset($_POST)) {

    require 'koneksi.php';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn) {

      $seed = str_split('0123456789');
      shuffle($seed);
      $resi = '';
      foreach (array_rand($seed, 10) as $k) {
        $resi .= $seed[$k];
      }
      $namapengirim = $_POST['namapengirim'];
      $lokasipengirim = $_POST['lokasipengirim'];
      $namapenerima = $_POST['namapenerima'];
      $lokasipenerima = $_POST['lokasipenerima'];
      $berat = $_POST['berat'];
      $harga = $_POST['harga'];
      $statuspengiriman = 'Dalam Pengiriman';

      $sql = "INSERT INTO detail_pengiriman (resi, nama_pengirim,
        lokasi_pengirim, nama_penerima, lokasi_penerima, berat,
        harga, status_pengiriman) VALUES
        ('$resi','$namapengirim','$lokasipengirim','$namapenerima','$lokasipenerima',
        $berat,$harga,'$statuspengiriman')";

      $result = mysqli_query($conn, $sql);

      $sql = "INSERT INTO log_barang(resi, waktu, lokasi_barang, status_pengiriman)
      VALUES ('$resi',CURRENT_TIME(),'$lokasipengirim','$statuspengiriman')";

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
