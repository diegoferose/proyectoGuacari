<?php
@session_start();
include 'usuarioModelo.php';
include '../util/utilModelo.php';
$util = new utilModelo();
$codigo = filter_input(INPUT_POST, 'codigo');
$nombre = filter_input(INPUT_POST, 'nombre');
$cedula = filter_input(INPUT_POST, 'cedula');
$fechaNacimiento = filter_input(INPUT_POST, 'edad');
$direccion = filter_input(INPUT_POST, 'direccion');
$celular = filter_input(INPUT_POST, 'telefono');
$codigoReferido = filter_input(INPUT_POST, 'referido');
$usuario = filter_input(INPUT_POST, 'username');
$correo = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$activo = '0';//por defecto viene en 0 que es inactivo y 1 es activo
$tipo = '2';//el tipo numero 2 es un usuario stadart ademas tenemos tipo 0 para los administradores y tipo 1 para los venderores.

//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("codigo", "nombre", "cedula", "fechaNacimiento", "direccion", "telefono", "codigoReferido", "usuario", "correo", "password", "activo", "tipo");
//$valores son los valores a almacenar
$valores = array("$codigo","$nombre","$cedula","$fechaNacimiento","$direccion","$celular","$codigoReferido","$usuario","$correo","$password","$activo","$tipo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "usuario";
$util -> insertar($nombreDeTabla,$campos, $valores) ;

$_SESSION['mensajeOk']="ok";
header('Location: ../index.php');
?>
