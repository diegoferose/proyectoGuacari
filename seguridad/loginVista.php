<?php
session_start();
if (isset($_SESSION['usuarioLogueado'])) {
  header('Location: ../informe/informeVista.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="../css/estiloLogin.css" rel="stylesheet" id="estiloLogin">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="../js/login.js"></script>
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
                <a href="#" id="register-form-link">Regístrate ahora</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <!-- ************INCIAR SESION******* INICIO ***** -->
                <form id="login-form" action="" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="ipassword" id="ipassword" tabindex="2" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
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
                              <img src="../img/ok.png" width="15" height="15" alt=""> Usuario creado con exito.
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
                <form id="register-form" action="../usuario/usuarioControlador.php" method="post" role="form" style="display: none;">
                  <?php
                  $longitud = 6;
                  $key = '';
                  $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
                  $max = strlen($pattern)-1;
                  for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
                  ?>
                  <div class="form-group">
                    <input type="text" name="codigo" id="codigo" tabindex="1" class="form-control"  value="<?php echo $key; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <input type="text" name="nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre Completo" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="documento" id="documento" tabindex="1" class="form-control" placeholder="Numero de Cedula" value="">
                  </div>
                  <div class="form-group">
                    Fecha de nacimiento: <input type="date" name="edad" id="edad" tabindex="1" class="form-control" placeholder="Fecha de nacimiento" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="direccion" id="direccion" tabindex="1" class="form-control" placeholder="Direccion" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="telefono" id="telefono" tabindex="1" class="form-control" placeholder="Telefono" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="referido" id="referido" tabindex="1" class="form-control" placeholder="Codigo referido" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Correo electronico" value="">
                  </div>

                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
                  </div>

                  <div class="form-group" id="pass">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                  </div>
                  <div class="form-group" id="pass1">
                    <input type="password" onkeyup="validarPassword();"  name="rPassword" id="rPassword" tabindex="2" class="form-control" placeholder="Confirmar contraseña">
                  </div>
                  <div class="form-group hidden" id="errorPass" style="color: #ff0000; font-size: 23px;">
                    <br>
                    <img src="../img/Error-128.png" width="20" height="20"><strong> Las contraseñas no coinciden</strong>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="guardar" id="guardar" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
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
