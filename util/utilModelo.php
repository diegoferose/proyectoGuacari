<?php
/**
*
*/
include '../conexion.php';
@session_start();
class utilModelo
{
  function insertar($tabla,$campos, $valores) {
    global $link;
    $construccionDeCampos="";
    for ($i=0; $i < count($campos); $i++) {
      $construccionDeCampos = ($i == (count($campos)-1)) ? $construccionDeCampos."`".$campos[$i]."`":$construccionDeCampos."`".$campos[$i]."`,";
    }
    $construccionDeValores ="";
    for ($i=0; $i < count($valores); $i++) {
      $construccionDeValores = ($i == (count($valores)-1)) ? $construccionDeValores."'".$valores[$i]."'":$construccionDeValores."'".$valores[$i]."',";
    }

    $consulta = "INSERT INTO `$tabla` ($construccionDeCampos) VALUES ($construccionDeValores);";
    $query = mysqli_query($link, $consulta);
  }
  function mostrarregistros($tabla,$nombreCampo,$valores) {
    global $link;
    $condiciones = "WHERE";
    for ($i=0; $i < count($nombreCampo); $i++) {
      $condiciones = ($i == (count($nombreCampo)-1)) ? $condiciones."`".$nombreCampo[$i]."` = '".$valores[$i]."'" : $condiciones."`".$nombreCampo[$i]."`= '".$valores[$i]."' AND ";
    }
    $consulta = "SELECT * FROM $tabla  $condiciones";
//    echo "consulta: ".$consulta;
//    die();

    $query = mysqli_query($link, $consulta);
    return $query;
  }
  function mostrarTodosRegistros($tabla) { //funcion para mostrar todos los registros sin condiciones
    global $link;

    $consulta = "SELECT * FROM $tabla";

    $query = mysqli_query($link, $consulta);
    return $query;
  }
  function modificar($tabla,$campos, $valores,$campoCondicion,$condicion) {
    global $link;
    $construccionDeValores ="";
    for ($i=0; $i < count($valores); $i++) {
      $construccionDeValores = ($i == (count($valores)-1)) ? $construccionDeValores."`".$campos[$i]."` = '".$valores[$i]."'":$construccionDeValores."`".$campos[$i]."` = '".$valores[$i]."',";
    }

    $consulta = "UPDATE `$tabla` SET $construccionDeValores WHERE `$campoCondicion` = '$condicion' ;";
    $query = mysqli_query($link, $consulta);
//   echo $consulta;
//    die();
    return $query;
  }
  function ultimaFechaPago($codigoUsuario){
    global $link;
    $consulta = "SELECT `fechaMovimiento` FROM `movimientos` WHERE `codigoUsuario` LIKE '$codigoUsuario' ORDER BY `fechaMovimiento` DESC LIMIT 1";
    $query = mysqli_query($link, $consulta);
    return $query;
  }
  function aumentarSaldo($codigoUsuario,$valor){
    global $link;
    $consulta = "UPDATE `usuario` SET saldo = saldo +$valor   WHERE codigo='$codigoUsuario'";
    $query = mysqli_query($link, $consulta);
    return $query;
  }

  function consultarVariasTablas($campos,$valores,$condiciones){
    global $link;
    $consulta="SELECT $campos FROM $valores WHERE $condiciones";
    $query = mysqli_query($link, $consulta);
    //echo "$consulta";
    return $query;

  }
  function consutarComisionesMes($codigoHijo,$codigoCabeza,$fechaUltimoPago){
    global $link;
    $consulta="SELECT COUNT(codigoHijo) FROM `registroComision` WHERE codigoHijo = '$codigoHijo' AND codigoCabeza = '$codigoCabeza' AND (fecha>= '$fechaUltimoPago')";
    $query = mysqli_query($link, $consulta);
    //echo "$consulta";
    return $query;

  }
  function consutarComisionesMes2($codigoCabeza,$fechaUltimoPago){
    global $link;
    $consulta="SELECT  COUNT(DISTINCT codigoHijo) FROM registroComision WHERE codigoCabeza = '$codigoCabeza' AND (fecha>= '$fechaUltimoPago')";
    $query = mysqli_query($link, $consulta);
    //echo "$consulta";
    return $query;

  }

}

?>
