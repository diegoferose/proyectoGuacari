<?php
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
    $util->validarRuta(0);
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
    include "../componentes/menuPrincipalAdmin.php";
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
                                    $0
                                    <span class="term"><a style="color: white;"
                                                          href="#">REALIZAR SOLICITUD DE RETIRO</a></span>
                                </div> <!-- /plan-price -->

                            </div> <!-- /plan-header -->
                        </div> <!-- /plan -->
                        <!-- /widget-content -->
                    </div>
                    <?php


                    ?>
                    <div class="widget">
                        <label>
                            <b>META: 6 REFERIDOS</b>
                        </label>
                        <div class="progress progress-striped active">
                            <div class="bar" <?php echo 'style="width:  100%;"'; ?>>
                                100%
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header"><i class="icon-group"></i>
                            <h3>Referidos <span
                                        class="badge badge-pill badge-success">0</span>
                            </h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <div class="shortcuts">

                               
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
                                $<?php echo number_format(0); ?>
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
