<?php
@session_start();
include '../util/utilModelo.php';
$util = new utilModelo();
$codigo = filter_input(INPUT_POST, 'codigo');
$valor = filter_input(INPUT_POST, 'valor');
$fecha = filter_input(INPUT_POST, 'fechaSolicitud');
$estado = 0; //para estados tenemos dos 0 que es "no atendido" y 1 que es "atendido"
$tipo =0; //el tipo 0 es para indicar que es una solicitud de retiro de dinero.

//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("codigoUsuario", "fechaSolicitud", "valor", "mensaje", "estado", "tipo");
//$valores son los valores a almacenar
$valores = array("$codigo", "$fecha", "$valor", "","$estado","$tipo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "solicitudes";
$util -> insertar($nombreDeTabla,$campos, $valores) ;


$_SESSION['mensajeOk']='SOLICITUD REGISTRADA CON EXITO <p class="help-block">Al correo electronico proximamente llegara la respuesta.</p>';
header('Location: ../util/okVista.php');
exit();
?>
