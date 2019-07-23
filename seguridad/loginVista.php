<?php
    include "../util/util.php";
    $util1 = new util();
    if (isset($_SESSION['usuario'])) {

        $util1->validarRuta(4);
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../css/estiloLogin.css" rel="stylesheet" id="estiloLogin">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <link href="../css/style.css" rel="stylesheet">
    <script src="../js/login.js"></script>
    <script src="../js/funciones.js"></script>
    <title>INICIO</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#modalCondiciones" id="register-form-link">Regístrate ahora</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- ************INCIAR SESION******* INICIO ***** -->
                            <form id="login-form" action="loguinControlador.php" method="post" role="form"
                                  style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control"
                                           placeholder="Usuario" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="ipassword" id="ipassword" tabindex="2"
                                           class="form-control" placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                                   class="form-control btn btn-login" value="Iniciar sesión">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="../restaurarPassword/restaurarPasswordVista.php" tabindex="5"
                                                   class="forgot-password">¿Has olvidado tu contraseña?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    if (isset($_SESSION['mensajeOk'])) {
                                        ?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <div class="alert alert-success" role="alert">
                                                            <img src="../img/ok.png" width="15" height="15" alt="">
                                                            Usuario creado con exito.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        unset($_SESSION['mensajeOk']);
                                    }

                                ?>
                            </form>
                            <!-- ************INCIAR SESION******* FIN ***** -->

                            <!-- ************REGISTRAR******* INICIO ***** -->
                            <form id="register-form" action="../usuario/usuarioControlador.php" method="post"
                                  role="form" style="display: none;">
                                <?php
                                    $key = $util1->generarCodigo();
                                    $edadTrabajador=$util1->mayorEdad('14');

                                ?>
                                <div class="form-group">
                                    <input type="text" name="codigo" id="codigo" tabindex="1" class="form-control"
                                           value="<?php echo $key; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nombre" id="nombre" tabindex="1" class="form-control"
                                           placeholder="Nombre Completo" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="documento" id="documento" tabindex="1" class="form-control"
                                           placeholder="Numero de Cedula" value="" required>
                                </div>
                                <div class="form-group">
                                    Fecha de nacimiento: <input type="date" name="edad" id="edad" tabindex="1"
                                                                class="form-control" placeholder="Fecha de nacimiento"
                                                                value="" required min="1940-01-01" max="<?php echo $edadTrabajador; ?>>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="direccion" id="direccion" tabindex="1" class="form-control"
                                           placeholder="Direccion" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telefono" id="telefono" tabindex="1" class="form-control"
                                           placeholder="Telefono" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="referido" id="referido"onkeyup="validarUsuario('#referido',2,'#referidoValido')"; tabindex="1" class="form-control"
                                           placeholder="Codigo referido" value="" required>
                                           <div id="referidoValido"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control"
                                           placeholder="Correo electronico" value="" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" id="username2" onkeyup="validarUsuario('#username2',0,'#usuarioValido');" tabindex="1" class="form-control"
                                           placeholder="Usuario" value="" required>
                                           <div id="usuarioValido" class="form-group span4">

                                           </div>
                                </div>

                                <div class="form-group" id="pass">
                                    <input type="password" name="password" onkeyup="validarPassword();" id="password" tabindex="2"
                                           class="form-control" placeholder="Contraseña" required>
                                </div>
                                <div class="form-group" id="pass1">
                                    <input type="password" onkeyup="validarPassword();" name="rPassword" id="rPassword"
                                           tabindex="2" class="form-control" placeholder="Confirmar contraseña" required>
                                </div>
                                <div class="form-group hidden" id="errorPass" style="color: #ff0000; font-size: 23px;">
                                    <br>
                                    <img src="../img/Error-128.png" width="20" height="20"><strong> Las contraseñas no
                                        coinciden</strong>
                                </div>
                                 <div id="terminos">
                                    <p>

                                                <h1>Términos y condiciones de uso de InstagramVersión</h1><br> simplificada realizada por la firma de abogados ​Schillings​ por encargo de la​ Growing Up Digital1Taskforce​ para su informe de enero de 2017.2Traducción: Dpto. TIC, colegio Madre Josefa Campos (Alaquàs).Términos de uso de ​Instagram​: nuestras reglas.1.Tienes que tener 13 o más años.2.No publiques nada que muestre violencia, que pueda asustar a otras personas o que contengaimágenes con desnudos.3.No uses la cuenta de nadie sin permiso, ni intentes descubrir sus datos de login.4.No permitas que nadie use tu cuenta.5.Mantén tu contraseña en secreto.6.No acoses a nadie ni publiques nada feo sobre ninguna persona.7.No publiques información privada de otra persona.8.No uses Instagram para hacer nada ilegal ni nada que nosotros hayamos prohibido.9.Si quieres añadir un sitio web a tu nombre de usuario, asegúrate primero de que tienes permiso deInstagram.10.No cambies nada de nuestro sitio web o de nuestras aplicaciones, ni subas ningún tipo de virus, nihagas nada que pueda interferir con la forma en que Instagram funciona. No nos envíes ideas sobrecómo mejorar Instagram.11.No utilices ningún tipo de software o robot para crear cuentas de acceso a Instagram, ni envíesspam o emails no deseados.12.Lee nuestras normas de uso y obedécelas cuando uses Instagram.13.No hagas nada que pueda afectar al modo en que otras personas usan y disfrutan de Instagram.14.No incites a nadie a saltarse estas reglas.Tus derechos y nuestros derechos:1.Tienes derecho a sentirte seguro usando Instagram.2.Oficialmenteereseldueñodecualquierimagenovídeooriginalquepubliques,peronosotrostenemospermisoparausarlos,asícomoparapermitirqueotroslosusenencualquierpartedelmundo. Aunque otros nos paguen por ese uso nosotros no tenemos que pagarte a tí por eso.3.TúereselresponsabledetodoloquehagasenInstagramydetodoloquepubliques,incluyendocosas inesperadas como nombres de usuario, datos y música de otra gente.4.Se asumirá que eres el propietario de lo que publicas, y que lo que publicas no incumple la ley. Siincumples la ley y te multan, tendrás que pagar la multa.5.AunqueereselresponsabledelainformaciónqueponesenInstagram,nosotrospodemosalmacenar,usarycompartirtuinformaciónpersonalconcompañíasconectadasaInstagram.Estainformaciónincluyetunombre,tuemail,tuescuela,dóndevives,tusimágenes,tunúmerodeteléfono,tus“megusta”y“nomegusta”,lossitiosquevisitas,quiénessontusamigosycualquier1​https://www.schillingspartners.com/2​http://www.childrenscommissioner.gov.uk/publications/govrowing-digital

                                    </p>
                                 </div>
                                 <input type="checkbox" name="vehicle1" value="Bike" required>  He leido y acepto los terminos y condiciones<br><br>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="guardar" id="guardar" tabindex="4"
                                                   class="form-control btn btn-register" value="Crear cuenta">
                                        </div>
                                    </div>
                                </div>

                            </form>

                            <!-- ************REGISTRAR******* FIN ***** -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function validarPassword() {
        var password = document.getElementById("password").value;
        var rPassword = document.getElementById("rPassword").value;
        if (password !== "" && password !== null && rPassword !== "" && rPassword !== null) {
            if (password === rPassword) {
                //                                                    alert("son iguales");
                document.getElementById("guardar").className = "btn btn-success btn-lg ";
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

</script>
</body>
</html>
