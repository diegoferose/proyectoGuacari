<?php
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
    $util->validarRuta(1);
    $nombreCampo = array("codigo");
    $valor = array($_SESSION['usuario'][0]);
    $tabla = "usuario";
    $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);
    while ($fila = mysqli_fetch_array($result)) {
        if ($fila != NULL) {
            $saldo = $fila['saldo'];
        }
    }
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
    include "../componentes/menuPrincipal.php";
?>
<div class="main">
    <div class="main-inner">
        <div class="container">


            <div class="row">

                <!-- /span6 -->
                <div class="span4">

                    <div class="widget">

                        <!-- /widget-header -->
                        <div class="plan green">
                            <div class="plan-header">

                                <div class="plan-title">
                                    SALDO DISPONIBLE
                                </div> <!-- /plan-title -->

                                <div class="plan-price">
                                    $<?php echo number_format($saldo); ?>
                                    <span class="term"><a style="color: white;"
                                                          href="../solicitudRetiro/solicitudRetiroVista.php">REALIZAR SOLICITUD DE RETIRO</a></span>
                                </div> <!-- /plan-price -->

                            </div> <!-- /plan-header -->
                        </div> <!-- /plan -->
                        <!-- /widget-content -->
                    </div>
                    <?php
                        $nombreCampo = array("codigoReferido");
                        $valor = array($_SESSION['usuario'][0]);
                        $tabla = "usuario";
                        $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);
                        $referidos = "";
                        $contadorReferidos =0;
                        while ($fila = mysqli_fetch_array($result)) {
                            if ($fila != NULL) {
                                $contadorReferidos++;
                                $saldo = $fila['saldo'];
                                $referidos = $referidos . ' <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">' . $fila['nombre'] . ' <br> <b>CODIGO: ' . $fila['codigo'] . '</b></span> </a>';
                            }
                        }
                          //consulta los referidos del mes actual
                        $result = $utilModelo2->consultarVariasTablas("*","usuario","codigoReferido='$codigoUsuario' and fechaDeIngreso between  '$fechaInicial' and '$fechaFinal'");
                        $referidosMensual = "";
                        $contadorReferidosMensual =0;
                        while ($fila = mysqli_fetch_array($result)) {
                            if ($fila != NULL) {
                                $contadorReferidosMensual++;
                                $saldo = $fila['saldo'];
                                $referidosMensual = $referidosMensual . ' <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">' . $fila['nombre'] . ' <br> <b>CODIGO: ' . $fila['codigo'] . '</b></span> </a>';
                            }
                        }

                    ?>
                        
    
                    <div class="widget">
                        <div class="widget-header"><i class="icon-group"></i>
                            <h3>TOTAL AFILIADOS <span class="badge badge-pill badge-success"><?php echo $contadorReferidos;?></span></h3>
                        </div>
                        <!-- /widget-header -->
                        
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                     <div class="widget">
                        <div class="widget-header"><i class="icon-group"></i>
                            <h3>AFILIADOS ESTE MES <span class="badge badge-pill badge-success"><?php echo $contadorReferidosMensual;?></span></h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="shortcuts">

                                <?php
                                echo $referidosMensual;
                                ?>
                            </div>
                            <!-- /shortcuts -->
                        </div>
                        <!-- /widget-content -->
                    </div>

                </div>
                <!-- /span8 -->
                <div class="span8">


                     <div class="widget widget-nopad">

                        <div class="widget widget-table action-table">
                          <div class="widget-header"> <i class="icon-th-list"></i>
                            <h3>AFILIADOS</h3>
                          </div>

                          <!-- /widget-header -->
                          <div id="scroll" class="widget-content">
                            <table class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th> NOMBRE</th>
                                  <th> DIRECCION</th>
                                  <th> TELEFONO</th>
                                  <th> FECHA AFILIACION</th>
                                  <th> FECHA ULTIMO PAGO</th>
                                  <th> ESTADO PAGO</th>

                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $result = $utilModelo2->consultarVariasTablas("*","usuario","codigoReferido='$codigoUsuario'");
                                  while ($fila = mysqli_fetch_array($result)) {
                                  if ($fila != NULL) {
                                     $afilados=$util->mostrarCantidadReferidos($fila[1]);
                                     $pagos=$util->validarUsuarioActivo($fila[1]);

                                    echo"

                                    <tr>
                                      <td>$fila[2]</td>
                                      <td>$fila[6]</td>
                                      <td>$fila[7]</td>
                                      <td>$fila[5]</td>
                                       <td>$pagos[0]</td>
                                       <td>$pagos[1]</td>

                                    </tr>

                                    ";


                                  }
                                  } ?>


                              </tbody>
                            </table>
                          </div>
                          <h6 class="bigstats">mensaje</h6>
                          <!-- /widget-content -->
                        </div>
                      </div>



                </div>
                 <!-- /span8 -->

            </div>
            <!-- /row -->

             <!-- inicio modal editar -->
<div id="modalEditar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Actualizar Datos</h3>
  </div>
  <div class="modal-body">

      <form style="min-width: 500px;" action="crudTrabajadorControlador.php" method="post" >



                                <div class="form-group">
                                  <input id="codigoE" name="codigo" type="hidden">
                                    <input   type="text" name="nombre" id="nombreE" tabindex="1" class=" form-control span4"
                                           placeholder="Nombre Completo" value="" required>
                                </div>
                                <div class="form-group">
                                    <input   type="text" name="documento" id="documentoE" tabindex="1" class=" form-control span4"
                                           placeholder="Numero de Cedula" value="" required>
                                </div>
                                <div class="form-group">
                                   Fecha Nacimiento:  <input style="min-width: 285px;" type="date" name="edad" id="edadE" tabindex="1"
                                                                class=" form-control span3" placeholder="Fecha de nacimiento"
                                                                value="" required>
                                </div>
                                <div class="form-group">
                                    <input   type="text" name="direccion" id="direccionE" tabindex="1" class=" form-control span4"
                                           placeholder="Direccion" value="" required>
                                </div>
                                <div class="form-group">
                                    <input   type="tel" pattern="[0-9]{} "name="telefono" id="telefonoE" tabindex="1" class=" form-control span4"
                                           placeholder="Telefono" value="" required>
                                </div>
                                <div class="form-group">
                                    <input   type="email" name="email" id="emailE" tabindex="1" class=" form-control span4"
                                           placeholder="Correo electronico" required value="">
                                </div>




    </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    <button type="submit" name="modificarTrabajador" id="modificarTrabajador"class="btn btn-primary">Modificar</button>
  </div>

  </form>
</div>

<!-- Fin modal -->
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

<script src="js/base.js"></script>

</body>
</html>
