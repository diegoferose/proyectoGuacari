<?php
@session_start();
include 'solicitudRetiroModelo.php';
include '../util/utilModelo.php';
$modelo = new solicitudRetiroModelo();
$util = new utilModelo();
$codigo = filter_input(INPUT_POST, 'codigo');
$valor = filter_input(INPUT_POST, 'valor');
$fecha = filter_input(INPUT_POST, 'fechaSolicitud');
$estado = 0; //para estados tenemos dos 0 que es "no atendido" y 1 que es "atendido"
$tipo =0; //el tipo 0 es para indicar que es una solicitud de retiro de dinero.


$campos = array("codigoUsuario", "fechaSolicitud", "valor", "mensaje", "estado", "tipo");
$valores = array("$codigo", "$fecha", "$valor", "","$estado","$tipo");
$util -> insertar("solicitudes",$campos, $valores) ;
//$modelo->insertar($codigo,$valor, $fecha,$estado,$tipo);
$_SESSION['mensajeOk']='SOLICITUD REGISTRADA CON EXITO <p class="help-block">Al correo electronico proximamente llegara la respuesta.</p>';
header('Location: ../util/okVista.php');
?>
