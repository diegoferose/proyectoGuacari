<?php
@session_start();
include 'solicitudRetiroModelo.php';
$modelo = new solicitudRetiroModelo();
$codigo = filter_input(INPUT_POST, 'codigo');
$valor = filter_input(INPUT_POST, 'valor');
$fecha = filter_input(INPUT_POST, 'fechaSolicitud');
$estado = 0; //para estados tenemos dos 0 que es "no atendido" y 1 que es "atendido"
$tipo =0; //el tipo 0 es para indicar que es una solicitud de retiro de dinero.
$modelo->insertar($codigo,$valor, $fecha,$estado,$tipo);
$_SESSION['mensajeOk']='SOLICITUD REGISTRADA CON EXITO <p class="help-block">Al correo electronico proximamente llegara la respuesta.</p>';
header('Location: ../util/okVista.php');
?>
