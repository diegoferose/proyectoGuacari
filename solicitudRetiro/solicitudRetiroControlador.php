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

$sql="SELECT * FROM solicitudes where codigoUsuario = '$codigo' and estado = '0'";

global $link;
$result=mysqli_query($link,$sql);
while ($fila = mysqli_fetch_array($result)) {
    if ($fila != NULL) {
      $verificada="true";

        }
      }
      if ($verificada) {
        $_SESSION['mensajeOk']='USTED YA TIENE UNA SOLICITUD PENDIENTE <p class="help-block">.Pronto se le dara respuesta a su anterior solicitud</p>';
        header('Location: ../util/okVista.php');
  echo "$verificada";
      }else{

//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("codigoUsuario", "fechaSolicitud", "valor", "mensaje", "estado", "tipo");
//$valores son los valores a almacenar
$valores = array("$codigo", "$fecha", "$valor", "","$estado","$tipo");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "solicitudes";
$utilModelo -> insertar($nombreDeTabla,$campos, $valores) ;

$destinatario = "diegoferose@hotmail.com";
$asunto = "Solicitu de retiro ";
$mensaje="

<table>
  <tr>
    <th colspan=2>
        <h2>Solicitud de retiro</h2>
    </th>
  </tr>
    <tr>
      <td>Nombre Usuario</td>
      <td>Oscar dorado</td>
    </tr
  <tr>
    <td>Valor Solicitud</td>
    <td><b>$valor<b></td>
  </tr>
  <tr>
    <td>Fecha Solicitud</td>
    <td><b>$fecha<b></td>
  </tr>
</table><br><br>



<h3>Este correo es automatico por favor no responder.<h3>
";



$enviarMail->enviarCorreos($destinatario,$asunto,$mensaje);


$_SESSION['mensajeOk']='SOLICITUD REGISTRADA CON EXITO <p class="help-block">Al correo electronico proximamente llegara la respuesta.</p>';
header('Location: ../util/okVista.php');
}
exit();
?>
