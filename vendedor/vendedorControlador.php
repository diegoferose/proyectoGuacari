<?php
@session_start();
include 'usuarioModelo.php';
include '../util/utilModelo.php';

$utilModelo = new utilModelo();



                        $referidosMensual = "";
                        $contadorReferidosMensual =0;
                        while ($fila = mysqli_fetch_array($result)) {
                            if ($fila != NULL) {
                                $contadorReferidosMensual++;
                                $saldo = $fila['saldo'];
                                $referidosMensual = $referidosMensual . ' <a href="javascript:;" class="shortcut"><i class="shortcut-icon  icon-user"></i><span class="shortcut-label">' . $fila['nombre'] . ' <br> <b>CODIGO: ' . $fila['codigo'] . '</b></span> </a>';
                            }
                        }

$nombreDeTabla = "usuario";
$utilModelo -> insertar($nombreDeTabla,$campos, $valores) ;

$_SESSION['mensajeOk']="ok";
header('Location: ../index.php');
exit();
?>
