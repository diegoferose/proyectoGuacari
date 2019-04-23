<?php
/**
*
*/
include '../conexion.php';
@session_start();
class solicitudRetiroModelo
{
  function insertar($codigo,$valor, $fecha,$estado,$tipo) {
    global $link;
    $consulta = "INSERT INTO `solicitudes` (`id`, `codigoUsuario`, `fechaSolicitud`, `valor`, `mensaje`, `estado`, `tipo`) VALUES (NULL, '$codigo', '$fecha', '$valor', '', '$estado', '$tipo');";
    $query = mysqli_query($link, $consulta);
  }

}

?>
