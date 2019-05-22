<?php
    include_once "../util/utilModelo.php";
    $utilModelo1 = new utilModelo();
    $util = new util();
    $nombreCampo = array("codigo");
    $valor = array($_SESSION['usuario'][0]);
    $tabla = "usuario";

    $result = $utilModelo1->mostrarregistros($tabla, $nombreCampo, $valor);
    while ($fila = mysqli_fetch_array($result)) {
        if ($fila != NULL) {
            $nombre = $fila['nombre'];

        }
    }

?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a
                    class="brand" href="index.html">GROW </a>
            <div class="nav-collapse">
                <ul class="nav pull-right">

                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="icon-user"></i> <?php echo $nombre; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
                                $util->validarElemento(0, '<li><a href="../controlSolicitudes/controlSolicitudesVista.php"><i class="icon-bell"></i> Solicitudes</a></li>');
                            ?>
                            <li><a href="../seguridad/cerrarSesion.php"><i class="icon-signout"></i>Cerrar sesion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <li class="active"><a href="../usuario/usuarioStandartVista.php"><i
                                class=" icon-home"></i><span>Inicio</span> </a></li>
                <li><a href="reports.html"><i class="icon-group"></i><span>¿Quienes somos?</span> </a></li>
                <li><a href="guidely.html"><i class="icon-book"></i><span></span>Politicas </a></li>
            </ul>
        </div>
        <!-- /container -->
    </div>
    <!-- /subnavbar-inner -->
</div>
<!-- /subnavbar -->
