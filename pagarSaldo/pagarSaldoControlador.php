<?php
@session_start();
include '../util/utilModelo.php';
include '../util/util.php';
include '../conexion.php';
include '../util/enviarCorreos.php';

$utilModelo = new utilModelo();
$util=new util();
$enviarMail = new correosSmtp();

$codigo = filter_input(INPUT_POST, 'codigo');
$valor = filter_input(INPUT_POST, 'valor');
$fecha = $util->hoy();
$estado = 0; //para estados tenemos dos 0 que es "no atendido" y 1 que es "atendido"
$tipo =0; //el tipo 0 es para indicar que es una solicitud de retiro de dinero.

$sql="SELECT saldo FROM usuario where codigo = '$codigo'";

global $link;
$result=mysqli_query($link,$sql);

while ($fila = mysqli_fetch_array($result)) {
    if ($fila != NULL) {
      $saldo=$fila[0];

        }
      }
$nuevo=$saldo-300000;

      echo $nuevo;

//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("saldo");
//$valores son los valores a almacenar
$valores = array("$nuevo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "usuario";
 $utilModelo -> modificar($nombreDeTabla,$campos, $valores,"codigo",$codigo);

$_SESSION['mensajeOk']='SOLICITUD REGISTRADA CON EXITO <p class="help-block">Al correo electronico proximamente llegara la respuesta.</p>';
header('Location: ../util/okVista.php');

exit();
?>
