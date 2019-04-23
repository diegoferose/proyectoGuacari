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
        <div class="row">

          <div class="widget widget-nopad">
            <div class="widget-header"> 
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats"><img src="../img/ok1.png" height="60" width="60" alt="">
                    <?php
                    @session_start();
                    if (isset($_SESSION['mensajeOk'])) {
                       echo $_SESSION['mensajeOk'];
                       unset($_SESSION['mensajeOk']);
                    }
                      ?>
                  </h6>
                  <div class="tab-content">
                    <div class="tab-pane active" id="formcontrols">
                      <form id="edit-profile" action="solicitudRetiroControlador.php" method="post" class="form-horizontal">
                        <fieldset>
                          <div class="control-group">

                            <div class="controls">

                            </div> <!-- /controls -->
                          </div> <!-- /control-group -->

                        </fieldset>
                      </form>
                    </div>



                  </div>
                </div>
                <!-- /widget-content -->

              </div>
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
