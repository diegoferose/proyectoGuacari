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

            
           <!-- /INICIO TABLA Datos-->

          <div class="span12">
            <?php 

             $utilModelo = new utilModelo();
                  $tabla = "usuario";
                  $result = $utilModelo->consultarVariasTablas("*",$tabla,"codigo=45645");
                  while ($fila = mysqli_fetch_array($result)) {
                      if ($fila != NULL) {

                        $datos=$fila[0]."||".
                             $fila[2]."||".
                             $fila[3]."||".
                             $fila[5]."||".
                             $fila[6]."||".
                             $fila[10]."||".
                             $fila[7];


                             echo "<h1>Nombre: $fila[2]</h1><br>
                                    <h1>Codigo: $fila[1]</h1>";

             ?>
            
            <br><br>
              <div class="widget widget-nopad">
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>DATOS VENDEDOR</h3>
              </div>

              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>                      
                      <th> IDENTIFICACION</th>
                      <th> FECHA NACIMIENTO</th>
                      <th> FECHA INGRESO</th>
                      <th> DIRECCION</th>
                      <th> TELEFONO</th>
                      <th> CORREO ELECTRONICO</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                 

                          echo "
                            <tr>
                             
                              <td> $fila[3] </td>
                              <td> $fila[4] </td>
                              <td> $fila[5] </td>
                              <td> $fila[6]</td>
                               <td>$fila[7]</td>
                               <td>$fila[10]</td>
                            </tr>";
                          }
                        }
                         ?>
                  </tbody>
                </table>
              </div>
             

              <!-- /widget-content -->
            </div>
          </div >

          </div>
          <!-- /FIN TABLA datos -->

         <!-- /INICIO TABLA Referedo-->

          <div class="span9">

          
              <div class="widget widget-nopad">
            <div class="widget widget-table action-table">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>REFERIDOS</h3>
              </div>

              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> CODIGO </th>
                      <th> NOMBRE</th>
                      <th> FECHA INGRESO</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  $utilModelo = new utilModelo();
                  $tabla = "usuario";
                  $result = $utilModelo->consultarVariasTablas("*",$tabla,"codigoReferido=45645");
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
          <!-- /FIN TABLA referidos -->


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
  <script src="../js/funciones.js"></script>
  <script src="../js/chart.min.js" ></script>
  <script src="../js/bootstrap.js"></script>
  <script language="javascript" type="text/javascript" src="../js/full-calendar/fullcalendar.min.js"></script>


  <script type="text/javascript">


  
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
