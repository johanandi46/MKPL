<?php
  require 'koneksi.php';

  $conn = mysqli_connect($host, $user, $pass, $db);

  if ($conn) {
    $sql = "select resi, nama_pengirim, berat, status_pengiriman
    from detail_pengiriman where resi = '".$_POST['resi']."'";

    $result = mysqli_query($conn, $sql);

    $result = mysqli_fetch_array($result);
    if ($result) {?>
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Keluhan Pelanggan</title>
          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

          <!-- Latest compiled and minified JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <link rel="stylesheet" href="css/kirimkeluhan.css">
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
      					<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-flag"></span> </span> <span class="glyphicon glyphicon-flash"></span> KiBar Express</a>
      				</div>
      				<!-- Collect the nav links, forms, and other content for toggling -->
      				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      					<ul class="nav navbar-nav navbar-right">
      						<li><button type="button" class="btn btn-default navbar-btn btn-success" data-toggle="modal" data-target="#LoginModal">
      							<span class="glyphicon glyphicon-log-in"></span> Login</button></li>
      					</ul>
      				</div><!-- /.navbar-collapse -->
      			</div><!-- /.container-fluid -->
      		</nav>

          <div class="container">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Detail Pengaduan</h4>
              </div>
              <div class="modal-body row">
                <div class="col-xs-6 form-horizontal">
                  <div class="form-group">
                    <label class="col-xs-2 control-label">Nomor Resi</label>
                    <div class="col-xs-10">
                      <input type="text" value="<?php echo $result['resi']?>" class="form-control" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-2 control-label">Nama Pengirim</label>
                    <div class="col-xs-10">
                      <input type="text" value="<?php echo $result['nama_pengirim']?>" class="form-control" readonly="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-2 control-label">Berat Kiriman</label>
                    <div class="col-xs-10">
                      <div class="input-group">
                        <input type="text" value="<?php echo $result['berat']?>" class="form-control" readonly=""><span class="input-group-addon">Kg  </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-xs-2 control-label">Status Kiriman</label>
                    <div class="col-xs-10">
                      <input type="text" value="<?php echo $result['status_pengiriman']?>" class="form-control" readonly="">
                    </div>
                  </div>
                </div>

                <div class="col-xs-6">
                  <form class="form-horizontal" action="keluhanSave.php" method="post">
                    <input type="text" name="resi" value="<?php echo $result['resi']?>" hidden="">
                    <div class="form-group">
                      <label class="col-xs-2 control-label">Nama</label>
                      <div class="col-xs-10">
                        <input type="text" name="nama" required="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-xs-2 control-label">Jenis Kelamin</label>
                      <div class="col-xs-10">
                        <label class="radio-inline">
                          <input type="radio" name="jk" value="Laki-Laki" checked> Laki-Laki
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="jk" value="Wanita"> Wanita
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-xs-2 control-label">Email</label>
                      <div class="col-xs-10">
                        <input type="email" name="email" required class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-xs-2 control-label">Alamat</label>
                      <div class="col-xs-10">
                        <input type="text" name="alamat" required="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-xs-2 control-label">No. Telp</label>
                      <div class="col-xs-10">
                        <input type="text" name="notelp" required="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-xs-2 control-label">Jenis Pengaduan</label>
                      <div class="col-xs-10">
                        <select class="form-control" name="jenis">
                          <option value="Belum Terima">Belum Terima</option>
                          <option value="Keterlambatan">Keterlambatan</option>
                          <option value="Kehilangan">Kehilangan</option>
                          <option value="Kiriman Tidak Utuh">Kiriman Tidak Utuh</option>
                          <option value="Pengembalian">Pengembalian (retur)</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-xs-2">Deskripsi Keluhan</label>
                      <div class="col-xs-10">
                        <textarea name="keluhan" rows="3" class="form-control"></textarea>
                      </div>
                    </div>
                    <input type="submit" name="btnKeluhan" value="Kirim Keluhan!" id="kirimkeluhan">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!--modal Login-->
          <div class="modal fade" tabindex="-1" role="dialog" id="LoginModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center" style="background-color:#5cb85c; border-top-left-radius:5px;border-top-right-radius:5px; color: white;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                  <form action="login.php" method="post"> <!---->
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" name="username" placeholder="Username" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="password" placeholder="Password" class="form-control" id="inpPass">
                        <span class="input-group-addon btn" id="spanPass">
                          <span class="glyphicon glyphicon-eye-open hide" id="spanPassShow"></span>
                          <span class="glyphicon glyphicon-eye-close" id="spanPassHide"></span>
                        </span>
                      </div>
                    </div>
                    <input type="submit" name="Login" class="hide">
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success" id="login">Login</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </body>
      </html>
    <?php
    } else {
      echo "<script>alert('Resi tidak ditemukan'); window.location.replace('index.php')</script>";
    }
  }
?>
