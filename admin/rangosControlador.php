<?php
@session_start();
include 'usuarioModelo.php';
include '../util/utilModelo.php';
$util = new utilModelo();
$nombreRango = filter_input(INPUT_POST, 'nombreRango');
$ipMaximo = filter_input(INPUT_POST, 'ipMaximo');
$igMaximo = filter_input(INPUT_POST, 'igMaximo');
$ventaPersonal = filter_input(INPUT_POST, 'ventaPersonal');


//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("codigo", "nombre", "cedula", "fechaNacimiento", "direccion", "telefono", "codigoReferido", "usuario", "correo", "password", "activo", "tipo");
//$valores son los valores a almacenar
$valores = array("$codigo","$nombre","$cedula","$fechaNacimiento","$direccion","$celular","$codigoReferido","$usuario","$correo","$password","$activo","$tipo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "usuario";
$util -> insertar($nombreDeTabla,$campos, $valores) ;

$_SESSION['mensajeOk']="ok";
header('Location: ../index.php');
exit();
?>
