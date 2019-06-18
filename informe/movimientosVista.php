<?php
include "../util/util.php";
include_once "../util/utilModelo.php";
$util = new util();

$util -> validarRuta(0);
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
  include "../componentes/menuPrincipalAdmin.php";
  ?>
  <div class="main">
    <div class="main-inner">
      <div class="container">
        <div class="row">

          <div class="span3">osdo</div>

         <!-- /INICIO TABLA Rangos-->

          <div class="span9">
              <div class="widget widget-nopad">
                <a href="../registrarPago/registroPagoVista.php" class="form-control btn btn-register">REGISTRAR PAGO</a>
                <br><br>
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>MOVIMIENTOS USUARIOS</h3>
              </div>

              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> USUARIO </th>
                      <th> FECHA</th>
                      <th> VALOR </th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  $utilModelo = new utilModelo();
                  $tabla = "movimientos";
                  $result = $utilModelo->mostrarTodosRegistros($tabla);
                  while ($fila = mysqli_fetch_array($result)) {
                      if ($fila != NULL) {

                          echo "
                            <tr>
                              <td>$fila[1] </td>
                              <td> $fila[3] </td>
                              <td> ".number_format($fila[4])."</td></tr>";
                          }
                        }
                         ?>
                  </tbody>
                </table>
              </div>


              <!-- /widget-content -->
            </div>
          </div >

          </div>
          <!-- /FIN TABLA rangos -->

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
