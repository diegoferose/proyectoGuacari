<?php
    @session_start();
    include "../util/util.php";
    include_once "../util/utilModelo.php";
    $utilModelo2 = new utilModelo();
    $util = new util();
    $util->validarRuta(2);
    $nombreCampo = array("codigo");
    $valor = array($_SESSION['usuario'][0]);
    $tabla = "usuario";
    $result1 = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);
    $passwordViejo = '';
    while ($fila = mysqli_fetch_array($result1)) {
        if ($fila != NULL) {

            $passwordViejo = $fila['password'];
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
                <div class="widget-header"><i class="icon-pencil"></i>
                    <h3>Cambiar contraseña</h3>
                </div>
                <input type="hidden" id="passwordViejo" value="<?php echo $passwordViejo; ?>" >
                <form action="registroPagoControlador.php" method="post">
                    <!-- /widget-header -->
                    <div class="widget-content">

                        <div class="control-group">
                            <label class="control-label" for="firstname">Contraseña antigua</label>
                            <div class="controls">
                                <input type="password" onblur="validarPasswordViejo()" id="antigua" name="antigua">
                            </div> <!-- /controls -->
                        </div>
                        <div class="form-group hidden" id="errorPass1" style="color: #ff0000; font-size: 23px;">
                            <br>
                            <img src="../img/Error-128.png" width="20" height="20"><strong> Contraseña incorrecta.</strong>
                            <br>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="firstname">Nueva contraseña</label>
                            <div class="controls" id="pass">
                                <input type="password" class="span6" onkeyup="validarPassword();" id="password"
                                       name="password">
                            </div> <!-- /controls -->
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="firstname">Repetir nueva contraseña</label>
                            <div class="controls" id="pass1">
                                <input type="password" class="span6" id="rPassword" onkeyup="validarPassword();"
                                       name="rPassword">
                            </div> <!-- /controls -->
                        </div>
                        <div class="form-group hidden" id="errorPass" style="color: #ff0000; font-size: 23px;">
                            <br>
                            <img src="../img/Error-128.png" width="20" height="20"><strong> Las contraseñas no
                                coinciden</strong>
                        </div>


                        <div class="form-actions">
                            <button type="submit" id="guardar" class="btn btn-primary">Guaradar</button>
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

<script src="js/base.js"></script>
<script type="text/javascript">
    function validarPassword() {
        var password = document.getElementById("password").value;
        var rPassword = document.getElementById("rPassword").value;
        if (password !== "" && password !== null && rPassword !== "" && rPassword !== null) {
            if (password === rPassword) {
                //                                                    alert("son iguales");
                document.getElementById("guardar").className = "btn btn-primary btn-lg ";
                document.getElementById("guardar").disabled = false;
                document.getElementById("errorPass").className = "hidden";
                document.getElementById("pass").className = "form-group";
                document.getElementById("pass1").className = "form-group";
            } else {
                document.getElementById("pass").className += " has-error";
                document.getElementById("pass1").className += " has-error";
                document.getElementById("errorPass").className = "form-group";
                document.getElementById("guardar").className += " disabled";
                document.getElementById("guardar").disabled = true;
            }
        }
    }
    function validarPasswordViejo() {
        var password = document.getElementById("antigua").value;
        var passwordV = document.getElementById("passwordViejo").value;
        if(password == passwordV){
            document.getElementById("guardar").className = "btn btn-primary btn-lg ";
            document.getElementById("guardar").disabled = false;
            document.getElementById("errorPass1").className = "hidden";
        }else{
            alert("la contraseña no es valida");
            document.getElementById("errorPass1").className = "form-group";
            document.getElementById("guardar").className += " disabled";
            document.getElementById("guardar").disabled = true;

        }


    }

</script>

</body>
</html>
