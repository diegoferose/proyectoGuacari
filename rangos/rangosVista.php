<?php
include "../util/util.php";
include_once "../util/utilModelo.php";
$util = new util();

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
              <div class="widget widget-nopad">
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>RANGOS GANANCIAS</h3>
              </div>

              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> RANGO </th>
                      <th> CANT VENTA PERSONAL</th>
                      <th> IP MAXIMO</th>
                      <th> IG MAXIMO </th>
                      <th class="td-actions">EDITAR/ELIMINAR</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php


                  $utilModelo = new utilModelo();
                  $tabla = "rangoUsuario";
                  $result = $utilModelo->mostrarTodosRegistros($tabla);
                  while ($fila = mysqli_fetch_array($result)) {
                      if ($fila != NULL) {

                        $datos=$fila[0]."||".
  			        					   $fila[1]."||".
  			        					   $fila[2]."||".
  			        					   $fila[3]."||".
  			        					   $fila[4];

                          echo "
                            <tr>
                              <td>$fila[1] </td>
                              <td> $fila[2] </td>
                              <td> $fila[3]</td>
                               <td><a href=\"#\">$fila[4]</a></td>
                              <td class=\"td-actions\"><a  data-toggle=\"modal\" href=\"#modalEditar\" onclick=\"agregarForm('$datos');\" class=\"btn btn-small btn-info\"><i class=\"btn-icon-only icon-pencil\"></i></a><a href=\"\"  data-toggle=\"modal\" class=\"btn btn-danger btn-small\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                            </tr>";
                          }
                        }
                         ?>
                  </tbody>
                </table>
              </div>
              <h6 class="bigstats"></h6>
              <a href="#modalGuardar"  data-toggle="modal" class="form-control btn btn-register">Crear Rango</a>

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
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Crear Rango</h3>
    </div>
    <div class="modal-body">

      <form action="rangosControlador.php" method="post">


      <div class="control-group">
        <label class="control-label" for="lastname">Rango</label>
           <div class="controls">
            <input type="text" class="span5" required name="nombreRango" id="nombreRango">
          </div> <!-- /controls -->
      </div> <!-- /control-group -->
      <div class="control-group">
        <label class="control-label" for="lastname">Venta Personal</label>
           <div class="controls">
            <input type="text" class="span5" required name="ventaPersonal" id="ventaPersonal">
          </div> <!-- /controls -->
      </div> <!-- /control-group -->
      <div class="control-group">
        <label class="control-label" for="lastname">Ip Maximo</label>
           <div class="controls">
            <input type="text" class="span5" required name="ipMaximo" id="ipMaximo">
          </div> <!-- /controls -->
      </div> <!-- /control-group -->
      <div class="control-group">
        <label class="control-label" for="lastname">Ig Maximo</label>
           <div class="controls">
            <input type="text" class="span5" required name="igMaximo" id="igMaximo">
          </div> <!-- /controls -->
      </div> <!-- /control-group -->
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
      <button type="submit" name="guardarRango" id="guardarRango"class="btn btn-primary">Guardar</button>
    </div>

    </form>
  </div>

  <!-- Fin modal -->

  <!-- inicio modal guardar -->
<div id="modalEditar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Editar Registros</h3>
  </div>
  <div class="modal-body">

    <form action="rangosControlador.php" method="post">


    <div class="control-group">
      <label class="control-label" for="lastname">Rango</label>
         <div class="controls">
           <input id="idRangoUsuario" name="idRangoUsuario" type="hidden">
          <input type="text" class="span5" required name="nombreRango" id="nombreRangoE">
        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">
      <label class="control-label" for="ventaPersonalE">Venta Personal</label>
         <div class="controls">
          <input type="text" class="span5" required name="ventaPersonal" id="ventaPersonalE">
        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">
      <label class="control-label" for="lastname">Ip Maximo</label>
         <div class="controls">
          <input type="text" class="span5" required name="ipMaximo" id="ipMaximoE">
        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">
      <label class="control-label" for="lastname">Ig Maximo</label>
         <div class="controls">
          <input type="text" class="span5" required name="igMaximo" id="igMaximoE">
        </div> <!-- /controls -->
    </div> <!-- /control-group -->
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    <button type="submit" name="guardarRangoE" id="guardarRangoE"class="btn btn-primary">Modificar</button>
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
  <script src="../js/chart.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.js"></script>
  <script language="javascript" type="text/javascript" src="../js/full-calendar/fullcalendar.min.js"></script>


  <script type="text/javascript ">
  function agregarForm(datos){
    d=datos.split("||");

     $("#idRangoUsuario").val(d[0]);
     $("#nombreRangoE").val(d[1]);
     $("#ventaPersonalE").val(d[2]);
     $("#ipMaximoE").val(d[3]);
    $("#igMaximoE").val(d[4]);
  }
  </script>

</body>
</html>
