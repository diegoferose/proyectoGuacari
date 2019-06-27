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

    $valoresSuscripcionActiva = $util->validarUsuarioActivo($_SESSION['usuario'][0]);

//    $nombreCampo = array("codigoReferido");
//    $valor = array($_SESSION['usuario'][0]);
//    $tabla = "usuario";
//    $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);
//    $referidos = "";
//    $contadorReferidos = 0;
//    while ($fila = mysqli_fetch_array($result)) {
//        if ($fila != NULL) {
//            $contadorReferidos++;
////            $saldo = $fila['saldo'];
//            $referidos = $referidos . ' <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">' . $fila['nombre'] . ' <br> <b>CODIGO: ' . $fila['codigo'] . '</b></span> </a>';
//        }
//    }
    $referidos = $util->mostrarCantidadReferidos($_SESSION['usuario'][0]);
    $rangoUsuario = $util->validarRangoUsuario($referidos[1]);
    $meta = $rangoUsuario[0];
    $porcentaje = ($meta==0)? 0:((int)$referidos[1] / $meta) * 100;
    $meta = ($meta==0)?3:$meta;
    $rangoUsuario[1] = ($rangoUsuario[1]=="" || $rangoUsuario[1]==null)?"No tienes un rango aun.":$rangoUsuario[1];

//    echo $meta;
    $fechaVencimiento = new DateTime($valoresSuscripcionActiva[0]);
    $intervalo = new DateInterval('P1M');
    $fechaVencimiento->add($intervalo);



//    var_dump($rangoUsuario);
//    die();

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
            <div class="container">
                <?php
                    if (isset($_SESSION['mensajeOk'])) {
                        ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <div class="alert alert-success" role="alert">
                                            <img src="../img/ok.png" width="15" height="15" alt="">
                                            <?php echo $_SESSION['mensajeOk'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['mensajeOk']);
                    }

                ?>
            <?php


                if ($valoresSuscripcionActiva[1] == "activo") {
                    echo '<h6><i class="icon-large icon-ok"></i>Su suscripcion se encuentra activa hasta el <a href="#" target="_blank">' . $fechaVencimiento->format('Y-m-d') . '</a></h6> <span class="label label-default"> Rango: ' . $rangoUsuario[1].'</span>';
                } else {
                    echo '<h6><i class="icon-large icon-remove"></i>Su suscripcion se encuentra vencida </h6> <span class="label label-default"> Rango: ' . $rangoUsuario[1].'</span>';
                }
            ?>
            <hr>
            <div class="row">


                <!-- /span6 -->
                <div class="span6">

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


                    ?>
                    <div class="widget">
                        <label>
                            <b>META: <?php echo  $meta;?> REFERIDOS</b>
                        </label>
                        <div class="progress progress-striped active">
                            <div class="bar" <?php echo 'style="width: ' . $porcentaje . '%;"'; ?>>
                                <?php
                                    echo $porcentaje . "%";
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header"><i class="icon-group"></i>
                            <h3>Referidos <span
                                        class="badge badge-pill badge-success"><?php echo $referidos[1]; ?></span>
                            </h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="shortcuts">

                                <?php
                                    echo $referidos[0];
                                ?>
                            </div>
                            <!-- /shortcuts -->
                        </div>
                        <!-- /widget-content -->
                    </div>


                    <!-- /widget -->

                </div>
                <!-- /span6 -->
                <div class="span6">
                    <div class="widget">
                        <div class="plan-header">

                            <div class="plan-title">
                                TOTAL MOVIMIENTOS.
                            </div> <!-- /plan-title -->

                            <div class="plan-price">
                                $<?php echo number_format(1000000); ?>
                                <span class="term"></span>
                            </div> <!-- /plan-price -->

                        </div>
                    </div>
                    <div class="widget">
                        <a href="#" class="badge badge-primary">SECCION PUBLICITARIA</a>
                    </div>
                    <div class="widget">
                        <img src="../img/publicidad1.jpg" alt="">
                    </div>
                    <div class="widget">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
                        </div>
                    </div>
                    <div class="widget">
                        <img height="350" width="560" src="../img/publicidad2.jpg" alt="">
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

<script src="js/base.js"></script>

</body>
</html>
