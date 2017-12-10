<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KiBar Express</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="js/login.js"></script>
    <script src="js/cekResi.js"></script>
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
            <li><button type="button" class="btn btn-default navbar-btn btn-success" data-toggle="modal" data-target="#LoginModal">
              <span class="glyphicon glyphicon-log-in"></span> Login</button></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">

      <ul class="nav nav-pills nav-stacked col-xs-2" role="tablist">
        <li role="presentation" class="active">
          <a href="#lacakkiriman" aria-controls="home" role="tab" data-toggle="tab">Lacak Kiriman <span class="pull-right glyphicon glyphicon-chevron-right"></span></a>
        </li>
        <li role="presentation">
          <a href="#cektarif" aria-controls="profile" role="tab" data-toggle="tab">Cek Tarif <span class="pull-right glyphicon glyphicon-chevron-right"></span></a></li>
        <li role="presentation">
          <a href="#keluhan" aria-controls="messages" role="tab" data-toggle="tab">Keluhan <span class="pull-right glyphicon glyphicon-chevron-right"></span></a></li>
      </ul>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="lacakkiriman">
          <div class="modal-content col-xs-10">
            <div class="modal-header">
              <h4 class="modal-title">Lacak kiriman Anda</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="lacakresi.php" method="post" id="cekresi">
                <div class="form-group">
                  <label class="col-xs-2 control-label">Resi</label>
                  <div class="col-xs-10">
                    <input type="text" name="resi" class="form-control" pattern="[0-7]{8}" placeholder="Nomor Resi" id="inputResi">
                    <p class="help-block">Nomor Resi terdiri dari 10 karakter</p>
                    <p class="help-block">Contoh Nomor Resi: 0123456789</p>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default btn-info" form="cekresi">
                Lacak
              </button>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="keluhan">
          <div class="modal-content col-xs-10">
            <div class="modal-header">
              <h4 class="modal-title">Keluhan</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="formkeluhan.php" method="post" id="formkeluhan">
                <div class="form-group">
                  <label class="col-xs-2 control-label">Resi</label>
                  <div class="col-xs-10">
                    <input type="text" name="resi" class="form-control" pattern="[0-9]{10}">
                    <input type="submit" class="hide">
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default btn-info" form="formkeluhan">
                Kirim
              </button>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="cektarif">
          <div class="modal-content col-xs-10">
            <div class="modal-header">
              <h4 class="modal-title">Cek Tarif</h4>
            </div>
            <div class="modal-body">
              <form class="form-inline text-center" action="cektarif.php" method="post">
                <div class="form-group">
                  <label for="sel1" class="control-label">Lokasi Asal </label>
                  <select class="form-control" name="lokasiasal" id="sel1">
                    <option value="Lowokwaru">Lowokwaru</option>
                    <option value="Klojen">Klojen</option>
                    <option value="Samaan">Samaan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sel2">Lokasi Tujuan</label>
                  <select class="form-control" name="lokasitujuan" id="sel2">
                    <option value="Lowokwaru">Lowokwaru</option>
                    <option value="Klojen">Klojen</option>
                    <option value="Samaan">Samaan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="berat">Berat</label>
                  <div class="input-group">
                    <input type="text" name="berat" class="form-control"><span class="input-group-addon"> Kg</span>
                  </div>
                </div>
                <div class="form-group">
                <input type="submit" name="submit" value="Cek Tarif" class="btn btn-default">
              </form>
            </div>

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
            <form action="login.php" method="post" id="login"> <!---->
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
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" form="login">Login</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </body>
</html>
