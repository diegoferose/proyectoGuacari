<?php
include "../util/utilOsdo.php";
include_once "../util/utilModelo.php";
$util = new utilOsdo();

$util -> validarRuta(0);
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

          <div class="span3"></div>

         <!-- /INICIO TABLA Rangos-->

          <div class="span9">

            <a href="#modalGuardar"  data-toggle="modal" class=" form-control btn btn-register">Crear Trabajador</a><br><br>
              <div class="widget widget-nopad">
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Trabajadores</h3>
              </div>

              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> CODIGO </th>
                      <th> NOMBRE</th>
                      <th> FECHA INGRESO</th>
                      <th> AFILIADOS </th>
                      <th class="td-actions">EDITAR/ELIMINAR</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php


                                  //  $key = $util->generarCodigo();
                                  //var_dump(  $codigoV=$util->validarCodigo($key));
                                  $codigoV="45645";
                                    $edadTrabajador=$util->mayorEdad('18');


                                    echo "$codigoV"."oscar dorado";

                  $utilModelo = new utilModelo();
                  $tabla = "usuario";
                  $result = $utilModelo->consultarVariasTablas("*",$tabla,"tipo=1 and activo=0");
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
                              <td class=\"td-actions\"><a  data-toggle=\"modal\" href=\"#modalEditar\" onclick=\"agregarForm('$datos');\" class=\"btn btn-small btn-info\"><i class=\"btn-icon-only icon-pencil\"></i></a><a href=\"#modalEliminar\"  onclick=\"agregarForm('$datos');\" data-toggle=\"modal\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                            </tr>";
                          }
                        }
                         ?>
                  </tbody>
                </table>
              </div>
              <h6 class="bigstats"></h6>


              <!-- /widget-content -->
            </div>
          </div >

          </div>
          <!-- /FIN TABLA rangos -->


        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /main-inner -->
  </div>
    <!-- inicio modal guardar -->
  <div id="modalGuardar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
      <h3 id="myModalLabel">Crear Trabajador</h3>
    </div>
    <div class="modal-body">

      <form class"span8" action="crudTrabajadorControlador.php" method="post" >


                                <div class="form-group   ">
                                    <input   type="text" name="codigo" id="codigo" tabindex="1" class=" form-control span4"
                                           value="<?php echo $codigoV; ?> "readonly required>
                                </div>
                                <div class="form-group   ">
                                    <input   type="text" name="nombre" id="nombre" tabindex="1" class=" form-control span4"
                                           placeholder="Nombre Completo" value="" required>
                                </div>
                                <div class="form-group   ">
                                    <input   type="text" name="documento" id="documento" tabindex="1" class=" form-control span4"
                                           placeholder="Numero de Cedula" value="" required>
                                </div>
                                <div class="form-group   ">
                                   Fecha Ncmiento<input type="date" name="edad" id="edad" tabindex="1"
                                                                class=" form-control span3" min="1940-01-01" max="<?php echo $edadTrabajador; ?>"
                                                                value="" required>
                                </div>
                                <div class="form-group   ">
                                    <input   type="text" name="direccion" id="direccion" tabindex="1" class=" form-control span4"
                                           placeholder="Direccion" value="" required>
                                </div>
                                <div class="form-group   ">
                                    <input   type="text" name="telefono" id="telefono" tabindex="1" class=" form-control span4"
                                           placeholder="Telefono" value="" required>
                                </div>
                                <div class="form-group  ">
                                    <input   type="email" name="email" id="email" tabindex="1" class=" form-control span4"
                                           placeholder="Correo electronico" value="" required>
                                </div>

                                <div class="form-group">
                                    <input  type="text" name="username" onkeyup="validarUsuario('#username');" id="username" tabindex="1" class=" form-control span4"
                                           placeholder="Usuario" value="" required>
                                           <div id="usuarioValido" class="span4">

                                           </div>
                                </div>


                                <div class="form-group" id="pass">
                                    <input   type="password" name="password" onkeyup="validarPassword();" id="password"
                                           class=" form-control span4 " placeholder="Contraseña" tabindex="2" required>
                                </div>
                                <div class="form-group   " id="pass1">
                                    <input   type="password" onkeyup="validarPassword();" name="rPassword" id="rPassword"
                                           tabindex="2" class=" form-control span4" placeholder="Confirmar contraseña" required>
                                </div>
                                <div class="form-group hidden" id="errorPass" style="color: #ff0000; font-size: 23px;">
                                    <br>
                                    <img src="../img/Error-128.png" width="20" height="20"><strong> Las contraseñas no
                                        coinciden</strong>
                                </div>

    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
      <button type="submit" name="guardarTrabajador" id="guardarTrabajador"class="btn btn-primary">Guardar</button>
    </div>

    </form>
  </div>

  <!-- Fin modal -->

  <!-- inicio modal editar -->
<div id="modalEditar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Editar Registros</h3>
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

 <!-- inicio modal eliminar -->
<div id="modalEliminar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Eliminar Registro</h3>
  </div>
  <div class="modal-body">

      <form action="crudTrabajadorControlador.php" method="post" >

                                  <input id="codigoEliminar" name="codigo" type="hidden">
                                  <h3>Seguro desea desactivar el trabajador</h3>
    </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    <button type="submit" name="eliminar" id="eliminar"class="btn btn-primary">desactivar</button>
  </div>

  </form>
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
  <script src="../js/funciones.js"></script>
  <script src="../js/chart.min.js" ></script>
  <script src="../js/bootstrap.js"></script>
  <script language="javascript" type="text/javascript" src="../js/full-calendar/fullcalendar.min.js"></script>


  <script type="text/javascript">


   function validarPassword() {

        var password = document.getElementById("password").value;
        var rPassword = document.getElementById("rPassword").value;

        if (password !== "" && password !== null && rPassword !== "" && rPassword !== null) {
            if (password === rPassword) {



                document.getElementById("errorPass").className = "hidden";
                document.getElementById("pass").className = "form-group";
                document.getElementById("pass1").className = "form-group";
            }else {
                document.getElementById("pass").className += " has-error";
                document.getElementById("pass1").className += " has-error";
                document.getElementById("errorPass").className = "form-group";

            }
        }
    }

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
