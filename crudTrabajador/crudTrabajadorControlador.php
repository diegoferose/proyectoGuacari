<?php
@session_start();
//include 'usuarioModelo.php';
include '../util/utilModelo.php';
include '../util/util.php';
$util = new util();
$utilModelo = new utilModelo();
$codigo = filter_input(INPUT_POST, 'codigo');
$nombre = filter_input(INPUT_POST, 'nombre');
$cedula = filter_input(INPUT_POST, 'documento');
$fechaNacimiento = filter_input(INPUT_POST, 'edad');
$fechaIngreso = $util->hoy();
$direccion = filter_input(INPUT_POST, 'direccion');
$celular = filter_input(INPUT_POST, 'telefono');
$codigoReferido="N/A";
$usuario = filter_input(INPUT_POST, 'username');
$correo = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$activo = '0';//por defecto viene en 0 que es inactivo y 1 es activo
$tipo = '1';//el tipo numero 2 es un usuario stadart ademas tenemos tipo 0 para los administradores y tipo 1 para los venderores.


//guardar
if(isset($_POST['guardarTrabajador'])){
	//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("codigo", "nombre", "cedula", "fechaNacimiento","fechaDeIngreso", "direccion", "telefono", "codigoReferido", "usuario", "correo", "password", "activo", "tipo");
//$valores son los valores a almacenar
$valores = array("$codigo","$nombre","$cedula","$fechaNacimiento","$fechaIngreso","$direccion","$celular","$codigoReferido","$usuario","$correo","$password","$activo","$tipo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "usuario";
$utilModelo -> insertar($nombreDeTabla,$campos, $valores) ;
echo "si funciono";
//modificar
}else if(isset($_POST['modificarTrabajador'])){
	echo "modificar";

	//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("nombre", "cedula", "fechaNacimiento","direccion", "telefono","correo");
//$valores son los valores a almacenar
$valores = array("$nombre","$cedula","$fechaNacimiento","$direccion","$celular","$correo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "usuario";
$utilModelo -> modificar($nombreDeTabla,$campos,$valores,'id',$codigo) ;
}else{
			echo "eliminar".$codigo;

		$utilModelo -> modificar('usuario','activo','1','id',$codigo) ;

}



$_SESSION['mensajeOk']="Accion realizada";header('Location: ../index.php');
exit();
?>
