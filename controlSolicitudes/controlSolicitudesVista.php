<?php
include "../util/util.php";
$util = new util();
$util -> validarRuta(2);
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
  ?>
  <div class="main">
    <div class="main-inner">
      <div class="container">
        <div class="row">

          <div class="widget widget-nopad">
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>SOLICITUDES DE RETIRO</h3>
              </div>

              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> NOMBRE ASOCIADO sdokjsdh </th>
                      <th> VALOR SOLICITUD odfkdj</th>
                      <th> FECHA SOLICITUD hgjdsfj</th>
                      <th class="td-actions"> Aceptar/Denegar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> Oscar javier dorado</td>
                      <td> 500.000 </td>
                      <td>20 February</td>
                      <td class="td-actions"><a href="https://www.paypal.com/co/home" target="_blank"  class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <tr>
                      <td> Oscar javier dorado</td>
                      <td> 500.000 </td>
                      <td>20 February</td>
                      <td class="td-actions"><a href="https://www.paypal.com/co/home" target="_blank"  class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <tr>
                      <td> Oscar javier dorado</td>
                      <td> 500.000 </td>
                      <td>20 February</td>
                      <td class="td-actions"><a href="https://www.paypal.com/co/home" target="_blank"  class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <tr>
                      <td> Oscar javier dorado</td>
                      <td> 500.000 </td>
                      <td>20 February</td>
                      <td class="td-actions"><a href="https://www.paypal.com/co/home" target="_blank"  class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <h6 class="bigstats">Recuerde que tiene 10 (diez) habiles para diligenciar las solicitudes.</h6>
              <!-- /widget-content -->
            </div>
          </div>

        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /main-inner -->
  </div>
    <!-- inicio modal -->
  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Cancelar solicitud</h3>
    </div>
    <div class="modal-body">
      <div class="form-group shadow-textarea col-xs-12">
        <label for="exampleFormControlTextarea6">Razon para negar el retiro</label>
        <textarea class="form-control z-depth-1"maxlength="500" style="min-width: 100%" id="exampleFormControlTextarea6" rows="6" placeholder="Maximo 500 caracteres"></textarea>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
      <button class="btn btn-primary">Guardar</button>
    </div>
  </div>

  <!-- Fin modal -->

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

  <script src="js/base.js"></script>

</body>
</html>
