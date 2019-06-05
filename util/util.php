<?php
    /**
     *
     */
    include '../conexion.php';
    include_once "utilModelo.php";
    @session_start();


    class util
    {

        function validarRuta($tipoUsarioPermitido)
        {
            if (isset($_SESSION['usuario'])) {
                if ($_SESSION['usuario'][1] == $tipoUsarioPermitido) {

                } else {
                    switch ($_SESSION['usuario'][1]) {
                        case 0:// usuario administrador
                            // code...
                            break;
                        case 1://usuario venderor
                            // code...
                            break;
                        case 2://usuario stadart
                            header('Location: ../usuario/usuarioStandartVista.php');
                            exit();
                            break;

                        default:
                            // code...
                            break;
                    }

                }

            } else {
                header('Location: ../index.php');
                exit();
            }
        }

        function validarElemento($tipoUsarioPermitido, $html)
        {
            if ($_SESSION['usuario'][1] == $tipoUsarioPermitido) {
                echo $html;
            }
        }

        function validarUsuarioActivo($codigoUsuario)
        {
            $utilModelo = new utilModelo();
            $result = $utilModelo->ultimaFechaPago($codigoUsuario);
            while ($fila = mysqli_fetch_array($result)) {
                if ($fila != NULL) {
                    $fecha = date("d-m-Y", strtotime($fila['fechaMovimiento']));
                }
            }
            $fechaVencimiento = new DateTime($fecha);
            $intervalo = new DateInterval('P1M');
            $fechaVencimiento->add($intervalo);
            date_add($fechaVencimiento, date_interval_create_from_date_string('1 days'));

            $fechaActual = new DateTime("now");
//            echo $fechaVencimiento->format('Y-m-d') . "\n";
//            echo $fechaActual->format('Y-m-d') . "\n";
//            var_dump($fechaActual == $fechaVencimiento);
//            var_dump($fechaActual <= $fechaVencimiento);
//            die();
            if ($fechaActual <= $fechaVencimiento || $fechaActual == $fechaVencimiento) {
                $estado = "activo";
//                echo $estado;

            } else {
                $estado = "vencido";

            }
            $valores = array($fecha, $estado);
//            die();
            return $valores;


        }
        function  mostrarCantidadReferidos($codigo){

            $utilModelo2 = new utilModelo();
            $nombreCampo = array("codigoReferido");
            $valor = array($codigo);
            $tabla = "usuario";
            $result = $utilModelo2->mostrarregistros($tabla, $nombreCampo, $valor);
            $referidos = "";
            $contadorReferidos = 0;
            while ($fila = mysqli_fetch_array($result)) {
                if ($fila != NULL) {
                    $contadorReferidos++;
//            $saldo = $fila['saldo'];
                    $referidos = $referidos . ' <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">' . $fila['nombre'] . ' <br> <b>CODIGO: ' . $fila['codigo'] . '</b></span> </a>';
                }
            }
            return array($referidos,$contadorReferidos);
        }

        function validarRangoUsuario($cantidadReferidos)
        {
//            $cantidadReferidos = $cantidadReferidos + 5;
            $utilModelo = new utilModelo();
            $tabla = "rangoUsuario";
            $meta = 0;
            $rango = "";
            $bandera = false;
            $c = 0;
            $result = $utilModelo->mostrarTodosRegistros($tabla);
            while ($fila = mysqli_fetch_array($result)) {
                if ($fila != NULL) {
                    $c++;
                    if ($bandera) {
                        $meta = $fila['vp'];
                        $bandera = false;
                    }
                    if ($cantidadReferidos >= $fila['vp']) {
//                        echo "ingreso";
                        $rango = $fila['rango'];
                        $bandera = true;
                    }

                }
            }
//            echo $c;
//            echo $cantidadReferidos;
//            die();
            return array($meta, $rango);

        }

        function generarCodigo()
        {
            $longitud = 6;
            $key = '';
            $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
            $max = strlen($pattern) - 1;
            for ($i = 0; $i < $longitud; $i++) $key .= $pattern{mt_rand(0, $max)};
            return $key;
        }

        function registrarComision($codigo, $valorPago, $nivel)
        {
            $utilModelo = new utilModelo();
            $nombreCampo = array("codigo");
            $valor = array("$codigo");
            $tabla = "usuario";
            $result = $utilModelo->mostrarregistros($tabla, $nombreCampo, $valor);
            $fila = mysqli_fetch_array($result);
            $codigoCabeza = $fila['codigoReferido'];

            if ($nivel <= 4 && $codigoCabeza != "") {
                $nombreCampo = array("nivel");
                $valor = array("$nivel");
                $tabla = "niveles";
                $result = $utilModelo->mostrarregistros($tabla, $nombreCampo, $valor);
                $fila = mysqli_fetch_array($result);
                $porcentaje = $fila['porcentaje'] / 100;
                $valorComision = $valorPago * $porcentaje;
                $valores = $this->validarUsuarioActivo($codigoCabeza);
                if($valores[1]=="activo") {
                    if ($nivel = 1) {
                        $referidos = $this->mostrarCantidadReferidos($codigo);
                        $cantidadReferidos = $referidos[1];
//                        echo $cantidadReferidos;
                        if($cantidadReferidos < 3){
                            $cantidadDeComisionesAPagar = -1;
                        }elseif ($cantidadReferidos < 6){
                            $cantidadDeComisionesAPagar = 3;
                        }elseif ($cantidadReferidos < 10){
                            $cantidadDeComisionesAPagar = 6;
                        }elseif ($cantidadReferidos < 15){
                            $cantidadDeComisionesAPagar = 10;
                        }elseif ($cantidadReferidos < 20){
                            $cantidadDeComisionesAPagar = 15;
                        }elseif ($cantidadReferidos < 30){
                            $cantidadDeComisionesAPagar = 20;
                        }elseif ($cantidadReferidos < 50){
                            $cantidadDeComisionesAPagar = 30;
                        }elseif ($cantidadReferidos < 75){
                            $cantidadDeComisionesAPagar = 50;
                        }elseif ($cantidadReferidos < 100){
                            $cantidadDeComisionesAPagar = 75;
                        }elseif ($cantidadReferidos < 150){
                            $cantidadDeComisionesAPagar = 100;
                        }elseif ($cantidadReferidos < 250){
                            $cantidadDeComisionesAPagar = 150;
                        }
                        $utilModelo->aumentarSaldo($codigoCabeza, $valorComision);
                    } else {
                        $nombreCampo = array("codigoUsuario");
                        $valor = array("$codigoCabeza");
                        $tabla = "registroComision";
                        $result = $utilModelo->mostrarregistros($tabla, $nombreCampo, $valor);
                        $fila = mysqli_fetch_array($result);
                        $comisionesPagadas = $fila['cantidad'];
                        if ($comisionesPagadas <= 3) {
                            $utilModelo->aumentarSaldo($codigoCabeza, $valorComision);
                        }
                    }
                    $nivel++;
                    $this->registrarComision($codigoCabeza, $valorPago, $nivel);
                }

            }
        }


    }

?>
