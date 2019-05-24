<?php
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
    $util->validarRuta(2);
    $nombreCampo = array("codigo");
    $valor = array($_SESSION['usuario'][0]);
    $tabla = "usuario";
    $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);
    while ($fila = mysqli_fetch_array($result)) {
        if ($fila != NULL) {
            $saldo = $fila['saldo'];
        }
    }

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
                <div class="span12">                        
                <div class="widget widget-plain">                    
                    <div class="widget-content">                        
                        <a href="javascript:;" class="btn btn-large btn-success">      Rango Actual : PLATINO     </a>    
                    </div> <!-- /widget-content -->                       
                </div> <!-- /widget -->                
            </div> <!-- /span12 -->
            </div>

            <div class="row">

                <!-- /span6 -->
                <div class="span4">

                    <div class="widget">

                        <!-- /widget-header -->
                        <div class="plan green">
                            <div class="plan-header">

                                <div class="plan-title">
                                    RANGO ACTUAL:<B>PLATINO</B>
                                    <br>
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
                        $meta = 5;
                        $porcentaje = ((int)$contadorReferidos/$meta)*100;

                    ?>
                   

                    <div class="widget">
                        <div class="widget-header"><i class="icon-group"></i>
                            <h3>Referidos <span class="badge badge-pill badge-success"><?php echo $contadorReferidos;?></span></h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="shortcuts">

                                <?php
                                echo $referidos;
                                ?>
                            </div>
                            <!-- /shortcuts -->
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                     <div class="widget">
                        <div class="widget-header"><i class="icon-group"></i>
                            <h3>Referidos <span class="badge badge-pill badge-success"><?php echo $contadorReferidos;?></span></h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="shortcuts">

                                <?php
                                echo $referidos;
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
                            <h3>CONSOLIDADO</h3>
                          </div>

                          <!-- /widget-header -->
                          <div class="widget-content">
                            <table class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th> MES</th>
                                  <th> RANGO</th>
                                  <th> VP</th>
                                  <th> IP</th>
                                  <th> IG</th>
                                  <th> TI</th>
                                  <th class="td-actions"> DESACTIVAR</th>
                                </tr>
                              </thead>
                              <tbody>
                               
                                <tr>
                                  <td> ENERO</td>
                                  <td>ESTANDAR</td>
                                  <td> <a href="#">8</a>  </td>
                                  <td><a href="#">max 164.000</a></td>
                                   <td><a href="#">2.430.000</a></td>
                                   <td> 2.594.000</td>
                                  <td class="td-actions"><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                </tr>
                                <tr>
                                  <td> FEBRERO</td>
                                  <td>EJECUTIVO</td>
                                  <td> <a href="#">8</a>  </td>
                                  <td><a href="#">max 164.000</a></td>
                                   <td><a href="#">2.430.000</a></td>
                                   <td> 2.594.000</td>
                                  <td class="td-actions"><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                </tr>
                                <tr>
                                  <td> MARZO</td>
                                  <td>PLATA</td>
                                  <td> <a href="#">8</a>  </td>
                                  <td><a href="#">max 164.000</a></td>
                                   <td><a href="#">2.430.000</a></td>
                                   <td> 2.594.000</td>
                                  <td class="td-actions"><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                </tr>
                                <tr>
                                  <td> ABRIL</td>
                                  <td>ORO</td>
                                  <td> <a href="#">8</a>  </td>
                                  <td><a href="#">max 164.000</a></td>
                                   <td><a href="#">2.430.000</a></td>
                                   <td> 2.594.000</td>
                                  <td class="td-actions"><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                </tr>
                                <tr>
                                  <td> MAYO</td>
                                  <td>PLATINO</td>
                                  <td> <a href="#">8</a>  </td>
                                  <td><a href="#">max 164.000</a></td>
                                   <td><a href="#">2.430.000</a></td>
                                   <td> 2.594.000</td>
                                  <td class="td-actions"><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                </tr>
                                <tr>
                                  <td> JUNIO</td>
                                  <td>ESTANDAR</td>
                                  <td> <a href="#">8</a>  </td>
                                  <td><a href="#">max 164.000</a></td>
                                   <td><a href="#">2.430.000</a></td>
                                   <td> 2.594.000</td>
                                  <td class="td-actions"><a href="#myModal"  data-toggle="modal" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                                </tr>
                                


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
