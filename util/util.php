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
            if ($fechaActual <= $fechaVencimiento || $fechaActual == $fechaVencimiento ) {
                $estado = "activo";
//                echo $estado;

            } else {
                $estado = "vencido";

            }
            $valores = array($fecha, $estado);
//            die();
            return $valores;


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
        function  generarCodigo(){
            $longitud = 6;
            $key = '';
            $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
            $max = strlen($pattern)-1;
            for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
            return $key;
        }


    }

?>
