<?php
/**
*
*/
include '../conexion.php';
@session_start();
class usuarioModelo
{
  function insertar($codigo,$nombre, $cedula,$fechaNacimiento,$direccion, $celular,$codigoReferido,$usuario, $correo,$password,$activo,$tipo) {
    global $link;
    $consulta = "INSERT INTO `usuario` (`id`, `codigo`, `nombre`, `cedula`, `fechaNacimiento`, `direccion`, `telefono`, `codigoReferido`, `usuario`, `correo`, `password`, `activo`, `tipo`) VALUES (NULL, '$codigo', '$nombre', '$cedula', '$fechaNacimiento', '$direccion', '$celular', '$codigoReferido', '$usuario', '$correo', '$password', '$activo','$tipo');";
    $query = mysqli_query($link, $consulta);
  }

}

?>
