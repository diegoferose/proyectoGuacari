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
    <meta charset="utf-8">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../css/estiloLogin.css" rel="stylesheet" id="estiloLogin">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
                                                                value="" required>
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
                                    <input type="text" name="referido" id="referido" tabindex="1" class="form-control"
                                           placeholder="Codigo referido" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control"
                                           placeholder="Correo electronico" value="" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" id="username"onkeyup="validarUsuario('#username');" tabindex="1" class="form-control"
                                           placeholder="Usuario" value="" required>
                                           <div id="usuarioValido" class="form-group span4">osdo

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
                <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

                <!-- Modal -->
                <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Thank you for visiting EGrappler.com</h3>
                  </div>
                  <div class="modal-body">
                    <p>One fine body…</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save changes</button>
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
