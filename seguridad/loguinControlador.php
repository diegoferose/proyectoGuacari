<?php
@session_start();
include '../util/utilModelo.php';
$util = new utilModelo();

//$campos = array("codigoReferido","direccion");
//$valores = array("sd33d21","calle 19 # 9-113");
//$util->modificar('usuario',$campos,$valores,'id','1');



//$usuario = filter_input(INPUT_POST, 'username');
//$password = filter_input(INPUT_POST, 'ipassword');
//
//$nombreCampo = array("usuario","password");
//$valor = array("$usuario","$password");
//$tabla = "usuario";
//$result = $util -> mostrarregistros($tabla,$nombreCampo,$valor);
//$contador = 0;
//while ($fila = mysqli_fetch_array($result)) {
//    if ($fila != NULL) {
//        $_SESSION['usuario']=array($fila['codigo'],$fila['tipo']);
//        $contador++;
//    }
//}
//
//include "../util/util.php";
//$util1 = new util();
//$util1 -> validarRuta(4);
?>
