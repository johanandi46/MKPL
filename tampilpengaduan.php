<?php
session_start();
  if (isset($_SESSION) && @$_SESSION['username']=='admin') {

    require 'koneksi.php';
    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn) {
      $sql = "select * from keluhan";
      $result = mysqli_query($conn, $sql);
      if ($result) {?>
        <!DOCTYPE html>
        <html>
          <head>
            <meta charset="utf-8">
            <title>Pengaduan</title>
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
                  <a class="navbar-brand" href="admin.php"><span class="glyphicon glyphicon-flag"></span> </span> <span class="glyphicon glyphicon-flash"></span> KiBar Express</a>
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

            <div class="container">
              <table class="table table-condensed">
                <thead>
                  <th>Resi</th>
                  <th>Nama Pengirim</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Jenis Keluhan</th>
                  <th>Keluhan</th>
                </thead>
                <tbody>
                  <?php
                    while ($row = mysqli_fetch_array($result)) {
                      echo "<tr>";
                      echo "<td>".$row['resi']."</td>";
                      echo "<td>".$row['nama_pengirim']."</td>";
                      echo "<td>".$row['jenis_kelamin']."</td>";
                      echo "<td>".$row['alamat']."</td>";
                      echo "<td>".$row['email']."</td>";
                      echo "<td>".$row['telp']."</td>";
                      echo "<td>".$row['jenis_keluhan']."</td>";
                      echo "<td>".$row['keluhan']."</td>";
                      echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </body>
        </html>
      <?php
      }
    }

  } else {
    echo "<script>window.location.replace('index.php')</script>";
  }
?>
