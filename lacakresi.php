<?php
  if (isset($_POST)) {
    require 'koneksi.php';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn) {
      $sql = "select * from log_barang where resi = '" . $_POST['resi'] ."';";

      $result = mysqli_query($conn, $sql);

      $rows = array();
      while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
      }

      if ($rows) {?>
        <!DOCTYPE html>
        <html>
          <head>
              <meta charset="utf-8">
              <title>Lacak barang</title>
              <!-- Latest compiled and minified CSS -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

              <!-- jQuery library -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

              <!-- Latest compiled and minified JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
              integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

              <!-- modal Login -->
              <script src="js/login.js"></script>

              <link rel="stylesheet" href="css/cekresi.css">
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
                  <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-flag"></span> <span class="glyphicon glyphicon-flash"></span> KiBar Express</a>
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

            <div class="container col-xs-10">
              <table class="table table-condensed">
                <thead>
                  <th>Resi</th>
                  <th>Waktu</th>
                  <th>Lokasi Barang</th>
                  <th>Status Pengiriman</th>
                </thead>
                <tbody>
                  <?php foreach ($rows as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$value['resi']."</td>";
                    echo "<td>".$value['waktu']."</td>";
                    echo "<td>".$value['lokasi_barang']."</td>";
                    echo "<td>".$value['status_pengiriman']."</td>";
                    echo "</tr>";
                  } ?>
                </tbody>
              </table>
            </div>
            <div class="container col-xs-2 text-center">
              <a href="index.php" id="keHome"><span class="glyphicon glyphicon-home"></span> Halaman Utama</a>
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
        echo "<script>alert('Resi tidak ditemukan, coba lagi!'); window.location.replace('index.php')</script>";
      }
    } else {
    echo "<script>alert('Kegagalan Sistem, coba lagi!'); window.location.replace('index.php')</script>";
    }
  } else {
    echo "<script>alert('Kegagalan Sistem, coba lagi!')</script>";
    header('location:index.php');
  }
?>
