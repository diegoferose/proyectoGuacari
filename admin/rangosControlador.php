<?php
@session_start();

include '../util/utilModelo.php';
$util = new utilModelo();
$nombreRango = filter_input(INPUT_POST, 'nombreRango');
$ipMaximo = filter_input(INPUT_POST, 'ipMaximo');
$igMaximo = filter_input(INPUT_POST, 'igMaximo');
$ventaPersonal = filter_input(INPUT_POST, 'ventaPersonal');


//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("id", "rango", "vp", "ipMaxMensual", "igMax");
//$valores son los valores a almacenar
$valores = array("default","$nombreRango","$ventaPersonal","$ipMaximo","$igMaximo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "rangoUsuario";
$util -> insertar($nombreDeTabla,$campos, $valores) ;

//$_SESSION['mensajeOk']="ok";
header('Location: ../admin/rangosVista.php');
exit();
?>
