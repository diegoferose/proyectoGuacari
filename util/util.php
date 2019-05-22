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
            $fechaVencimiento = date("d-m-Y", strtotime($fecha . "+ 1 month"));;
            $fechaActual = date("d-m-Y");
//            echo $fecha . "<br>";
//            echo $fechaVencimiento."<br>";
//            echo $fecha_actual;
            if($fechaActual > $fechaVencimiento){
                $estado = "vencido";
            }else{
                $estado = "activo";
            }
            $valores = array($fechaVencimiento,$estado);
          return $valores;


        }


    }

?>
