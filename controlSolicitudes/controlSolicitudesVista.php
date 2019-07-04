<?php
include "../util/util.php";
include '../conexion.php';
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
                      <th> NOMBRE ASOCIADO</th>
                      <th> VALOR SOLICITUD</th>
                      <th> FECHA SOLICITUD</th>
                      <th class="td-actions"> Aceptar/Denegar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    //$utilModelo = new utilModelo();
                    //$tabla = "solicitudes";
                    //$result = $utilModelo->mostraRegistros($tabla);



                    $sql="SELECT U.nombre,S.* FROM usuario U,solicitudes S WHERE S.codigoUsuario = U.codigo AND S.estado=0";
                    global $link;
                		$result=mysqli_query($link,$sql);
                    while ($fila = mysqli_fetch_array($result)) {
                        if ($fila != NULL) {

                          $datos=$fila[2]."||".
                                  $fila[4]."||".
                               $fila[7];

                            echo "
                              <tr>
                                <td>$fila[0] </td>
                                <td> $fila[4] </td>
                                <td> $fila[3]</td>
                                <td class=\"td-actions\"><a href=\"#aceptarSolicitud\" onclick=\"agregarForm('$datos');\" data-toggle=\"modal\"   class=\"btn btn-small btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a><a href=\"#myModal\"onclick=\"agregarForm('$datos');\"  data-toggle=\"modal\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>

                              </tr>";
                            }
                          }
                           ?>
                  </tbody>
                </table>
              </div>
              <h6 class="bigstats">Recuerde que debe diligenciar las solicitudes.</h6>
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
    <!-- inicio modal cancelar solicitud -->
    <form class="" action="controlSolicitudesControlador.php" method="POST">


  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Cancelar solicitud</h3>
    </div>
    <div class="modal-body">
      <div class="form-group shadow-textarea col-xs-12">
        <input id="codigoUsuario" name="codigoUsuario" type="hidden">
        <input id="estado" name="estado" type="hidden">
        <label for="observacionSolicitud">Razon para negar el retiro</label>
        <textarea class="form-control z-depth-1"maxlength="500" required style="min-width: 100%" id="observacionSolicitud" name="observacionSolicitud" rows="6" placeholder="Maximo 500 caracteres"></textarea>
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
      <button type="submit" class="btn btn-primary" name="negarSolicitud">Guardar</button>
    </div>
  </div>
  </form>

  <!-- Fin modal cancelar solicitud-->
      <!-- inicio modal aceptar solicitud-->
    <form class="" action="controlSolicitudesControlador.php" method="POST">


  <div id="aceptarSolicitud" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Aceptar solicitud</h3>
    </div>
    <div class="modal-body">
      <div class="form-group shadow-textarea col-xs-12">
        <input id="codigoUsuarioA" name="codigoUsuario" type="hidden">
        <input id="estadoA" name="estado" type="hidden">
        <input id="valorSolicitud" name="valorSolicitud" type="hidden">
         <h3>Antes de aceptar la solicitud debe de ralizar la transaccion. De click sobre la imagen para selecionar medio de pago.</h3>
        <a href="https://www.paypal.com/co/home" target="blank"><img width="45%" src="../img/paypal.png"></a>
        <a href="https://www.paypal.com/co/home" target="blank"><img width="50%" src="../img/daviplata.png"></a><br>
           <div class="control-group"> 
               <label class="checkbox inline">
                  <input type="checkbox" required> Ya realice la transaccion.                                            </label>
                                          </div>    <!-- /controls -->    
                  

        </div>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
      <button type="submit" class="btn btn-primary" name="aceptarSolicitud">Aceptar Solicitud</button>
    </div>
  </div>
  </form>

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
  <script type="text/javascript">
  function agregarForm(datos){
    d=datos.split("||");

     $("#codigoUsuario").val(d[0]);
     $("#estado").val(1);
      $("#codigoUsuarioA").val(d[0]);
     $("#estadoA").val(1);
     $("#valorSolicitud").val(d[1])

  }
  </script>

</body>
</html>
