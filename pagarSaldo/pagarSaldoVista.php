<?php
include "../util/util.php";
include '../conexion.php';
$util = new util();

//$util -> validarRuta(2);

//$util -> validarRuta(1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NOMBRE S.A.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
  rel="stylesheet">
  <link href="../css/font-awesome.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/pages/dashboard.css" rel="stylesheet">
  <link href="../css/pages/plans.css" rel="stylesheet">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <?php
  include "../componentes/menuPrincipal.php";
  $sql="SELECT * FROM usuario where codigo = '$codigoUsuario'";

  global $link;
  $result=mysqli_query($link,$sql);
  while ($fila = mysqli_fetch_array($result)) {
      if ($fila != NULL) {
        $maxRetiro= $fila[14];
          }
        }
  ?>
  <div class="main">
    <div class="main-inner">
      <div class="container">
        <div class="row">

          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-pencil"></i>
              <h3> PAGAR CON SALDO DISPONIBLE</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats">Recuerda que debes tener el valor total de la membresia para poder utilizar esta opcion.</h6>
                  <div class="tab-content">
                    <div class="tab-pane active" id="formcontrols">
                      <form id="edit-profile" action="pagarSaldoControlador.php" method="post" class="form-horizontal">
                        <fieldset>
                          <div class="control-group">
                            <label class="control-label" for="username">Codigo</label>
                            <div class="controls">
                              <input type="text" class="span6 disabled" id="codigo" name="codigo" value=<?php echo $codigoUsuario; ?> readonly>
                              <p class="help-block">El codigo de usuario no puede ser modificado.</p>
                            </div> <!-- /controls -->
                          </div> <!-- /control-group -->
                          <div class="control-group">
                            <label class="control-label" for="firstname">Saldo Disponible</label>
                            <div class="controls">
                              <input type="number" class="span6" id="valor" name="valor" <?php echo "value='$maxRetiro'"; ?> min="300000" max="300000" readonly>
                            </div> <!-- /controls -->
                          </div> <!-- /control-group -->
                          <br>
                          <?php

                            if ($maxRetiro>=300000) {
                                echo "<div class=\"form-actions\">
                                  <button type=\"submit\" class=\"btn btn-primary\">PAGAR MEMBRESIA</button>
                                  <button class=\"btn\">Cancelar</button>
                                </div> <!-- /form-actions -->";
                            }else {
                              echo "<div class=\"form-actions\">

                                <a href='../index.php' class=\"btn\">Cancelar</a>
                              </div> <!-- /form-actions -->";
                            }




                           ?>

                        </fieldset>
                      </form>
                    </div>



                  </div>
                </div>
                <!-- /widget-content -->

              </div>
            </div>
          </div>

        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /main-inner -->
  </div>

  <?php
  include "../componentes/pie.php";
  ?>
  <!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="../js/jquery-1.7.2.min.js"></script>
  <script src="../js/excanvas.min.js"></script>
  <script src="../js/chart.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.js"></script>
  <script language="javascript" type="text/javascript" src="../js/full-calendar/fullcalendar.min.js"></script>



</body>
</html>
