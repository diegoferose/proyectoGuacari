<?php
@session_start();
include '../util/utilModelo.php';
include '../util/util.php';
include '../util/enviarcorreos.php';
$util= new util();
$utilModelo = new utilModelo();
$correos=new correosSmtp();
$negarSolicitud = filter_input(INPUT_POST, 'observacionSolicitud');
$estado = filter_input(INPUT_POST, 'estado');
$codigoUsuario = filter_input(INPUT_POST, 'codigoUsuario');
$valorRetiro=filter_input(INPUT_POST, 'valorSolicitud');
//estado = 0; //para estados tenemos dos 0 que es "no atendido" y 1 que es "atendido"
//tipo =0; //el tipo 0 es para indicar que es una solicitud de retiro de dinero.

//////////////////////////////////////////////////////////////////////////////////////////////////////

//campos para modificar valores en solicitudes
//$campos es el nombre de los campos tal cual aparece en la base de datos
$campos = array("mensaje", "estado");
//$valores son los valores a almacenar
$valores = array("$negarSolicitud","$estado");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
$nombreDeTabla = "solicitudes";

///////////////////////////////////////////////////////////////////////////////////////////////////////
//consulta datos usarios para el correo y el mensaje y el saldo
$fecha = date("F j, Y");
$nombreCampo = array("codigo");
$valor = array($codigoUsuario);
$tabla = "usuario";
$destinatario="";
$asunto="Respuesta solicitud";
$result = $utilModelo->mostrarregistros($tabla, $nombreCampo, $valor);
while ($fila = mysqli_fetch_array($result)) {
    if ($fila != NULL) {
      $destinatario=$fila[10];
      $saldo=$fila[14];
      


      if(isset($_POST['negarSolicitud'])){
              $mensaje="

      Guadalajara de Buga $fecha <br>
      L.C.<br><br>

      Estimado(a) $fila[2]<br> <br>

      Cordial saludo.<br><br>

      La presente es para confirmarle que debido a: <br> $negarSolicitud <br>
      se ha tomado la determinacion de negar la solicitud de retiro anteriormente solicitada.


      En caso de cualquier duda puede comunicarse con su asesor o referido mas cercano.<br><br>


      Cordialmente.<br><br>


      Admin@grow.com<br>
      Aministrador





      ";
         $utilModelo -> modificar($nombreDeTabla,$campos, $valores,"codigoUsuario",$codigoUsuario);
        var_dump($correos->enviarcorreos($destinatario,$asunto,$mensaje));
        

      }else if(isset($_POST['aceptarSolicitud'])){
              $mensaje="

      Guadalajara de Buga $fecha <br>
      L.C.<br><br>

      Estimado(a) $fila[2]<br> <br>

      Cordial saludo.<br><br>

      La presente es para confirmarle que su solicitud ha sido aceptada.<br>
      puede realizar el retiro de su dinero en cualquier momento 


      En caso de cualquier duda puede comunicarse con su asesor o referido mas cercano.<br><br>


      Cordialmente.<br><br>


      Admin@grow.com<br>
      Aministrador





      ";

    
        //$valores son los valores a almacenar
        $valores = array("Solicitud Aceptada","$estado");
        $nuevoSaldo=$saldo-$valorRetiro;
        $utilModelo -> modificar($nombreDeTabla,$campos, $valores,"codigoUsuario",$codigoUsuario);


        $campos = array("saldo");
          //$valores son los valores a almacenar
          $valores = array("$nuevoSaldo");
          //la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
          $nombreDeTabla = "usuario";
          echo $codigoUsuario;
        $utilModelo -> modificar($nombreDeTabla,$campos, $valores,"codigo",$codigoUsuario);
        var_dump($correos->enviarcorreos($destinatario,$asunto,$mensaje));
        
      }

     


        }
      }




$_SESSION['mensajeOk']='ACCION REGISTRADA CON EXITO <p class="help-block">Se envio un correo electronico al usuario con la respuesta a la solicitud.</p>';
header('Location: ../util/okVista.php');
exit();
?>
