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
    $condiciones =" WHERE ";
    for ($i=0; $i < count($nombreCampo); $i++) {
      $condiciones = ($i == (count($nombreCampo)-1)) ? $condiciones."`".$nombreCampo[$i]."` = '".$valores[$i]."'" : $condiciones."`".$nombreCampo[$i]."`= '".$valores[$i]."' AND ";
    }
    $consulta = "SELECT * FROM $tabla  $condiciones";
    $query = mysqli_query($link, $consulta);
    return $query;
  }
  function modificar($tabla,$campos, $valores,$campoCondicion,$condicion) {
    global $link;
    $construccionDeValores ="";
    for ($i=0; $i < count($valores); $i++) {
      $construccionDeValores = ($i == (count($valores)-1)) ? $construccionDeValores."`".$campos[$i]."` = '".$valores[$i]."'":$construccionDeValores."`".$campos[$i]."` = '".$valores[$i]."',";
    }

    $consulta = "UPDATE `$tabla` SET $construccionDeValores WHERE `$campoCondicion` = $condicion ;";
    $query = mysqli_query($link, $consulta);
  }

}

?>
