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

          <!-- /span6 -->
          <div class="span6">

            <div class="widget">

              <!-- /widget-header -->
              <div class="plan green">
                <div class="plan-header">

                  <div class="plan-title">
                    SALDO DISPONIBLE
                  </div> <!-- /plan-title -->

                  <div class="plan-price">
                    $<?php echo number_format(50000);?>
                    <span class="term">AUN NO PUEDES RETIRAR</span>
                  </div> <!-- /plan-price -->

                </div> <!-- /plan-header -->
              </div> <!-- /plan -->
              <!-- /widget-content -->
            </div>
            <div class="widget">
              <label>
                <b>META: 5 REFERIDOS</b>
              </label>
              <div class="progress progress-striped active">
                <div class="bar" style="width: 80%;">80%</div>
              </div>
            </div>

            <div class="widget">
              <div class="widget-header"> <i class="icon-group"></i>
                <h3>Referidos <span class="badge badge-pill badge-success">9</span></h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">
                <div class="shortcuts">
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                  <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">LINA MARCELA ROSERO GIRALDO <br> <b>CODIGO: 3jd930</b></span> </a>
                </div>
                <!-- /shortcuts -->
              </div>
              <!-- /widget-content -->
            </div>
            <!-- /widget -->
            <div class="widget">
              <div class="widget-header"> <i class="icon-signal"></i>
                <h3> Area Chart Example</h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">
                <canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
                <!-- /area-chart -->
              </div>
              <!-- /widget-content -->
            </div>

            <!-- /widget -->

          </div>
          <!-- /span6 -->
          <div class="span6">
            <div class="widget">
              <div class="plan-header">

                <div class="plan-title">
                  TOTAL MOVIMIENTOS.
                </div> <!-- /plan-title -->

                <div class="plan-price">
                  $<?php echo number_format(1000000);?>
                  <span class="term"></span>
                </div> <!-- /plan-price -->

              </div>
            </div>
            <div class="widget">
              <a href="#" class="badge badge-primary">SECCION PUBLICITARIA</a>
            </div>
            <div class="widget">
              <img src="../img/publicidad1.jpg" alt="">
            </div>
            <div class="widget">
              <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
              </div>
            </div>
            <div class="widget">
              <img height="350" width="560" src="../img/publicidad2.jpg" alt="">
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
  <script>

  var lineChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
      {
        fillColor: "rgba(220,220,220,0.5)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        data: [65, 59, 90, 81, 56, 55, 40]
      },
      {
        fillColor: "rgba(151,187,205,0.5)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        pointStrokeColor: "#fff",
        data: [28, 48, 40, 19, 96, 27, 100]
      }
    ]

  }

  var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


  var barChartData = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
      {
        fillColor: "rgba(220,220,220,0.5)",
        strokeColor: "rgba(220,220,220,1)",
        data: [65, 59, 90, 81, 56, 55, 40]
      },
      {
        fillColor: "rgba(151,187,205,0.5)",
        strokeColor: "rgba(151,187,205,1)",
        data: [28, 48, 40, 19, 96, 27, 100]
      }
    ]

  }

  $(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      selectable: true,
      selectHelper: true,
      select: function(start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.fullCalendar('renderEvent',
          {
            title: title,
            start: start,
            end: end,
            allDay: allDay
          },
          true // make the event "stick"
        );
      }
      calendar.fullCalendar('unselect');
    },
    editable: true,
    events: [
      {
        title: 'All Day Event',
        start: new Date(y, m, 1)
      },
      {
        title: 'Long Event',
        start: new Date(y, m, d+5),
        end: new Date(y, m, d+7)
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d+4, 16, 0),
        allDay: false
      },
      {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
      },
      {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
      },
      {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
      },
      {
        title: 'EGrappler.com',
        start: new Date(y, m, 28),
        end: new Date(y, m, 29),
        url: 'http://EGrappler.com/'
      }
    ]
  });
});
</script><!-- /Calendar -->
</body>
</html>