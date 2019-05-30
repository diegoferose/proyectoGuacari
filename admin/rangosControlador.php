<?php
@session_start();

include '../util/utilModelo.php';
$util = new utilModelo();
$idRango=filter_input(INPUT_POST,'idRangoUsuario');
$nombreRango = filter_input(INPUT_POST, 'nombreRango');
$ipMaximo = filter_input(INPUT_POST, 'ipMaximo');
$igMaximo = filter_input(INPUT_POST, 'igMaximo');
$ventaPersonal = filter_input(INPUT_POST, 'ventaPersonal');
echo $idRango;
if ($idRango != null) {
  echo $idRango;
  $campos = array("rango","vp","ipMaxMensual","igMax");
  echo"<br>";
  $valores = array("$nombreRango","$ventaPersonal","$ipMaximo","$igMaximo");
  echo"<br>";
  $util->modificar('rangoUsuario',$campos,$valores,'id',$idRango);

}else{
//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("id", "rango", "vp", "ipMaxMensual", "igMax");
//$valores son los valores a almacenar
$valores = array("default","$nombreRango","$ventaPersonal","$ipMaximo","$igMaximo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "rangoUsuario";
$util -> insertar($nombreDeTabla,$campos, $valores) ;
}
//$_SESSION['mensajeOk']="ok";
header('Location: ../admin/rangosVista.php');
exit();
?>
