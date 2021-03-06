<?php
include "../util/util.php";
$util = new util();
$util -> validarRuta(0);

$fechaInicial=$util->primerDia();
    $fechaFinal=$util->ultimoDia();
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

         <!-- /INICIO TABLA ACTIVOS -->

          <div class="span6">
              <div class="widget widget-nopad">
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>AFILIADOS ESTE MES</h3>
              </div>

              <!-- /widget-header -->
              <div id="scroll" class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> CODIGO ASOCIADO</th>
                      <th> NOMBRE</th>
                      <th> FECHA INGRESO</th>
                      <th> FECHA ULTIMO PAGO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php                                  

                  $utilModelo = new utilModelo();
                  $tabla = "usuario";
                   $result = $utilModelo->consultarVariasTablas("*","usuario"," fechaDeIngreso between  '$fechaInicial' and '$fechaFinal'");
                  while ($fila = mysqli_fetch_array($result)) {
                      if ($fila != NULL) {

                        $datos=$fila[0]."||".
                             $fila[2]."||".
                             $fila[3]."||".
                             $fila[5]."||".
                             $fila[6]."||".
                             $fila[10]."||".
                             $fila[7];

                          echo "
                            <tr>
                              <td>$fila[1] </td>
                              <td> $fila[2] </td>
                              <td> $fila[5]</td>
                               <td>$fila[4]</td>
                              
                            </tr>";
                          }
                        }
                         ?>
                  </tbody>
                </table>
              </div>
              <h6 class="bigstats">sms</h6>
              <!-- /widget-content -->
            </div>
          </div>

          </div>
          <!-- /FIN TABLA ACTIVOS -->
          <!-- /INICIO TABLA INACTIVOS -->
          <div class="span6">
              <div class="widget widget-nopad">
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>ASOCIADOS INACTIVOS</h3>
              </div>

              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> NOMBRE ASOCIADO </th>
                      <th> VALOR ACUMULADO</th>
                      <th> FECHA RETIRO</th>
                      <th> CANT. REFERIDOS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> Oscar javier dorado</td>
                      <td> 500.000 </td>
                      <td>20 February</td>
                      <td><a href="#">12</a></td>
                     
                    </tr><?php


                                  //  $key = $util->generarCodigo();
                                  //var_dump(  $codigoV=$util->validarCodigo($key));
                                  $codigoV="45645";
                                    $edadTrabajador=$util->mayorEdad('18');


                                    echo "$codigoV"."oscar dorado";

                  $utilModelo = new utilModelo();
                  $tabla = "usuario";
                  $result = $utilModelo->consultarVariasTablas("*",$tabla,"tipo=2 and activo=1");
                  while ($fila = mysqli_fetch_array($result)) {
                      if ($fila != NULL) {

                        $datos=$fila[0]."||".
                             $fila[2]."||".
                             $fila[3]."||".
                             $fila[5]."||".
                             $fila[6]."||".
                             $fila[10]."||".
                             $fila[7];

                          echo "
                            <tr>
                              <td>$fila[1] </td>
                              <td> $fila[2] </td>
                              <td> $fila[5]</td>
                               <td>$fila[4]</td>
                              
                            </tr>";
                          }
                        }
                         ?>




                  </tbody>
                </table>
              </div>
              <h6 class="bigstats">sms</h6>
              <!-- /widget-content -->
            </div>
          </div>

          </div>

          <!-- /fin tabla INACTIVOS -->


        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /main-inner -->
  </div>
    <!-- inicio modal -->
  <div id="modalActivar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
 <!-- inicio modal -->
  <div id="modalDesactivar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Desactivar Usuarios</h3>
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

  
   <script type="text/javascript">


   

    function agregarForm(datos){
      d=datos.split("||");

       $("#codigoE").val(d[0]);
       $("#codigoEliminar").val(d[0]);
       $("#nombreE").val(d[1]);
       $("#documentoE").val(d[2]);
       $("#edadE").val(d[3]);
      $("#telefonoE").val(d[4]);
       $("#direccionE").val(d[6]);
       $("#emailE").val(d[5]);
    }

  </script>

</body>
</html>
