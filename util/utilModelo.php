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

}

?>
