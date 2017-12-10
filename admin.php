<?php
session_start();

if (isset($_SESSION) && $_SESSION['username']=='admin') {?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Admin</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <script src="js/logout.js"></script>
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
              <li><button type="submit" class="btn btn-default navbar-btn btn-danger" id="btnLogout">
                <span class="glyphicon glyphicon-log-out"></span> Logout</button></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="modal-content col-xs-6">
        <div class="modal-header">
          <h4 class="modal-title">Mendaftar Kiriman Baru</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="daftar.php" method="post" id="daftar">
            <div class="form-group">
              <label for="namapengirim" class="col-xs-2 control-label">Nama Pengirim</label>
              <div class="col-xs-10">
                <input type="text" name="namapengirim" required="" id="namapengirim" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="lokasipengirim" class="col-xs-2 control-label">Lokasi Pengirim</label>
              <div class="col-xs-10">
                <select class="form-control" name="lokasipengirim" required="" id="lokasipengirim">
                  <option value="Lowokwaru">Lowokwaru</option>
                  <option value="Samaan">Samaan</option>
                  <option value="Klojen">Klojen</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="namapenerima" class="col-xs-2 control-label">Nama Penerima</label>
              <div class="col-xs-10">
                <input type="text" name="namapenerima" required="" id="namapenerima" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="lokasipenerima" class="col-xs-2 control-label">Lokasi Penerima</label>
              <div class="col-xs-10">
                <select class="form-control" name="lokasipenerima" required="" id="lokasipenerima">
                  <option value="Lowokwaru">Lowokwaru</option>
                  <option value="Samaan">Samaan</option>
                  <option value="Klojen">Klojen</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="berat" class="col-xs-2 control-label">Berat</label>
              <div class="col-xs-10">
                <input type="text" name="berat" required="" id="berat" class="form-control" placeholder="Dalam Kg">
              </div>
            </div>
            <div class="form-group">
              <label for="jenisjasa" class="col-xs-2 control-label">Jenis Jasa</label>
              <div class="col-xs-10">
                <select class="form-control" name="jenisjasa" required="" id="jenisjasa">
                  <option value="Reguler">Reguler</option>
                  <option value="Express">Express</option>
                </select>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-success" form="daftar">Daftar</button>
        </div>
      </div>

      <div class="modal-content col-xs-6">
        <div class="modal-header">
          <h4 class="modal-title">Update Kiriman</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="update.php" method="post" id="update">
            <div class="form-group">
              <label for="resi" class="col-xs-2 control-label">Resi</label>
              <div class="col-xs-10">
                <input type="text" name="resi" required="" id="resi" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="lokasibarang" class="col-xs-2 control-label">Lokasi Barang</label>
              <div class="col-xs-10">
                <select class="form-control" name="lokasibarang" required="" id="lokasibarang">
                  <option value="Lowokwaru">Lowokwaru</option>
                  <option value="Samaan">Samaan</option>
                  <option value="Klojen">Klojen</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="statuspengiriman" class="col-xs-2 control-label">Status Pengiriman</label>
              <div class="col-xs-10">
                <select class="form-control" name="statuspengiriman" required="" id="statuspengiriman">
                  <option value="Dalam Pengiriman">Dalam Pengiriman</option>
                  <option value="Diterima">Diterima</option>
                </select>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-success" form="update">Update</button>
        </div>
      </div>

      <div class="modal-content col-xs-6">
        <div class="modal-header">
          <h4 class="modal-title">Tampilkan Pengaduan</h4>
        </div>
        <div class="modal-body text-center">
          <a href="tampilpengaduan.php" class="btn btn-info">Lihat seluruh pengaduan</a>
        </div>
      </div>
    </body>
  </html>
  <?php
} else {
  header('location:index.php');
}
?>
