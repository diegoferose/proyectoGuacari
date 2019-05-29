<?php
include "../util/util.php";
include_once "../util/utilModelo.php";
$util = new util();


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

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a
                    class="brand" href="index.html">Restablecer Contraseña </a>
            
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar-inner -->
</div>
<br>
<body>
  
  <div class="main">
    <div class="main-inner">
      <div class="container">
        <div class="row">

          

         <!-- /INICIO TABLA Rangos-->

          <div class="span9">
<form action="restaurarPasswordControlador.php" method="POST">
            <div class="form-group" id="pass"><br>
              <label>Por favor digite nombre de usuario.</label><br>
                    <input type="text" name="usuarioRestablecer" id="usuarioRestablecer" tabindex="2" class="form-control" required placeholder="nombre usuario">
                  </div>

              <div class="widget widget-nopad">
            <div class="widget widget-table action-table">
             

              <!-- /widget-header -->
              <div class="widget-content">
                <!-- /controls --> 
              </div>
              <h6 class="bigstats"></h6>
              <button type="submit" class="form-control btn btn-register">Restablecer</button>

              <!-- /widget-content -->
            </div>
          </div >
</form>
          </div>
          <!-- /FIN TABLA rangos -->
<pre>
     














     
   </pre>
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


  

</body>
</html>
