<?php
@session_start();
include 'usuarioModelo.php';
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
$modelo = new usuarioModelo();
$modelo->insertar($codigo,$nombre, $cedula,$fechaNacimiento,$direccion, $celular,$codigoReferido,$usuario, $correo,$password,$activo,$tipo);
$_SESSION['mensajeOk']="ok";
header('Location: ../index.php');
?>
