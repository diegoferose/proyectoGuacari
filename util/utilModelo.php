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
    for ($i=0; $i <$campos.length() ; $i++) {
      $construccionDeCampos = $construccionDeCampos."``";
      //calle 18a # 16-69
    }
    $consulta = "INSERT INTO `$tabla` (`id`, `codigoUsuario`, `fechaSolicitud`, `valor`, `mensaje`, `estado`, `tipo`) VALUES (NULL, '$codigo', '$fecha', '$valor', '', '$estado', '$tipo');";
    $query = mysqli_query($link, $consulta);
  }

}

?>
