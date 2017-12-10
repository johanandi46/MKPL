<?php
  if (isset($_POST)) {
    require 'koneksi.php';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn) {
      $sql = "select jarak from lokasi where lokasi_asal ='" . $_POST['lokasipengirim'] . "' and
              lokasi_tujuan = '" . $_POST['lokasipenerima'] . "';";
      $data = mysqli_query($conn, $sql);
      $data = mysqli_fetch_array($data);

      $jarak = $data['jarak'];

      $sql = "select harga from jenis_paket where jenis_paket = '" . $_POST['jenisjasa'] . "';";
      $data = mysqli_query($conn, $sql);
      $data = mysqli_fetch_array($data);

      $harga = $data['harga'];

      $berat = $_POST['berat'];

      $total = $harga * $jarak * $berat;
    }

    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Review Kiriman Baru</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      </head>
      <body>

        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href=""><span class="glyphicon glyphicon-flag"></span> </span> <span class="glyphicon glyphicon-flash"></span> KiBar Express</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><button type="button" class="btn btn-default navbar-btn btn-danger">
                  <span class="glyphicon glyphicon-log-out"></span> Logout</button></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="modal-content col-xs-6 col-xs-offset-3">
          <div class="modal-header">
            <h4 class="modal-title">Mendaftar Kiriman Baru</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="daftar.php" method="post" id="daftar">
              <div class="form-group">
                <label for="namapengirim" class="col-xs-2 control-label">Nama Pengirim</label>
                <div class="col-xs-10">
                  <input type="text" name="namapengirim" id="namapengirim" class="form-control" value="<?php echo $_POST['namapengirim']?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label for="lokasipengirim" class="col-xs-2 control-label">Lokasi Pengirim</label>
                <div class="col-xs-10">
                  <input type="text" name="lokasipengirim" id="lokasipengirim" class="form-control" value="<?php echo $_POST['lokasipengirim']?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label for="namapenerima" class="col-xs-2 control-label">Nama Penerima</label>
                <div class="col-xs-10">
                  <input type="text" name="namapenerima" id="namapenerima" class="form-control" value="<?php echo $_POST['namapenerima']?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label for="lokasipenerima" class="col-xs-2 control-label">Lokasi Penerima</label>
                <div class="col-xs-10">
                  <input type="text" name="lokasipenerima" id="lokasipenerima" class="form-control" value="<?php echo $_POST['lokasipenerima']?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label for="berat" class="col-xs-2 control-label">Berat</label>
                <div class="col-xs-10">
                  <input type="text" name="berat" id="berat" class="form-control" value="<?php echo $_POST['berat']?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label for="jenisjasa" class="col-xs-2 control-label">Jenis Jasa</label>
                <div class="col-xs-10">
                  <input type="text" name="jenisjasa" id="jenisjasa" class="form-control" value="<?php echo $_POST['jenisjasa']?>" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label for="harga" class="col-xs-2 control-label">Total Harga</label>
                <div class="col-xs-10">
                  <input type="text" name="harga" id="harga" class="form-control" value="<?php echo $total?>" readonly="">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <a href="admin.php" class="btn btn-default btn-warning">Batal</a>
            <button type="submit" class="btn btn-default btn-success" form="daftar">Daftar</button>
          </div>
        </div>
      </body>
    </html>
    <?php
  } else {
    echo "<script>alert('Kegagalan Sistem, coba lagi!')</script>";
    header('location:admin.php');
  }
?>
