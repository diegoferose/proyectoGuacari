<?php
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
        //$util->validarRuta(2);
    $nombreCampo = array("tipo");
    $valor = array("2");
    $tabla = "usuario";
    //    echo "esta fue";
    $result1 = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);

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

            <div class="widget">
                <div class="widget-header"><i class="icon-money"></i>
                    <h3>Registrar pagos.</h3>
                </div>

                <form action="registroPagoControlador.php" method="post">
                <!-- /widget-header -->
                <div class="widget-content">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Buscar persona:</label>
                        <select class="selectpicker" onchange="persona()" name="lider" id="lider" data-show-subtext="true"
                                data-live-search="true">
                            <option value="null" data-subtext=" - Sin codigo">Ninguno</option>
                            <?php
                                while ($fila = mysqli_fetch_array($result1)) {
                                    if ($fila != NULL) {
                                        $valores = $util->validarUsuarioActivo($fila['codigo']);
                                        if ($valores[1]!="activo"){
                                            echo '<option value="' . $fila['codigo'] . '" data-subtext="' . $fila['codigo'] . '">' . $fila['nombre'] . '</option>';
                                        }


                                    }
                                }
                            ?>
                        </select>

                    </div>
                    <div class="control-group">
                        <label class="control-label" for="firstname">Valor</label>
                        <div class="controls">
                            <input type="number" class="span6" id="valor" name="valor" value="300000">
                        </div> <!-- /controls -->
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="firstname">Fecha</label>
                        <div id="filterDate2">

                            <!-- Datepicker as text field -->
                            <div class="input-group date" data-date-format="dd.mm.yyyy">
                                <input  type="date" class="form-control" name="fecha">

                            </div>

                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" id="guardar" class="btn btn-primary" >Guaradar</button>
                        <button class="btn">Cancelar</button>
                    </div>
                </div>
                <!-- /widget-content -->
                </form>
            </div>

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
<!--select picker-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>-->
<!--<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>-->
<link rel='stylesheet prefetch'
      href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<!--<script src="js/base.js"></script>-->
<script type="text/javascript">

    document.getElementById('guardar').disabled='disabled';
    function persona() {
        var botonGuardar = document.getElementById("guardar").value;
        var codigo = document.getElementById("lider").value;
        if (codigo == "Ninguno" || codigo == null || codigo == "null") {
            botonGuardar.disabled='disabled';
        } else {
            // alert("entro");
            document.getElementById('guardar').disabled='';
        }
    }
</script>

</body>
</html>
