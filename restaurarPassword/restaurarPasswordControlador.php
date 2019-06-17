<?php
@session_start();
include '../util/utilModelo.php';
include '../util/util.php';
include '../util/enviarCorreos.php';


//$campos = array("codigoReferido","direccion");
//$valores = array("sd33d2","calle 19 # 9-113");
//$util->modificar('usuario',$campos,$valores,'id','1');
				  $utilModelo = new utilModelo();
                  $util =new util();
                  $enviarMail = new correosSmtp();


$usuario = filter_input(INPUT_POST, 'usuarioRestablecer');


                  //variable busqueda del usuario
                  $nombreCampo = array("usuario");
				  $valor = array("$usuario");
        		  $tabla = "usuario";
                  $result = $utilModelo -> mostrarregistros($tabla,$nombreCampo,$valor);
                  $fila = mysqli_fetch_array($result);

if ($fila != null) {


                  $id=$fila[0];
                  $correoUsuario=$fila[10];



                  //Generador de nueva contraseña
                    $key=$util->generarCodigo();

                  //variables para el envio de correos
                  $destinatario = $correoUsuario;
                  $asunto = "Nueva Password GROW";
                  $mensaje="

                  <table =\"border: 1px solid #000; border-radius: .25rem;font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif; color: #333;\\\">
  <tr>
    <th colspan = \"2\" style = \" background: #ed1c40;  color: #fff;  border: none;\" >
													<h2>Nueva Password</h2>
		                  </th>
	                  </tr>
		                  <tr>
												<td>Nombre Usuario</td>
		                    <td>$usuario</td>
		                  </tr
	                  <tr>
											<td>Nueva Password</td>
	                    <td><b>$key<b></td>
	                  </tr>
									</table><br><br>



                  Para ingresar nuevamente <a  href='localhost/proyectoGuacari/seguridad/loginVista.php' >aqui</a>
                  ";



                 $enviarMail->enviarCorreos($destinatario,$asunto,$mensaje);

                  //Variables de actuaizar Contraseña
                   $campos = array("password");
				  echo"<br>";
				  $valores = array($key);
				  echo"<br>";

				$utilModelo->modificar($tabla,$campos,$valores,'id',$id);

				echo "Se ha enviado un mensaje a $destinatario Con su nueva contraseña";


}elseif(var_dump($enviarMail)){
	//Variables de actuaizar Contraseña
                   $campos = array("password");
				  echo"<br>";
				  $valores = array($key);
				  echo"<br>";

				$utilModelo->modificar($tabla,$campos,$valores,'id',$id);

				echo "Se ha enviado un mensaje a $destinatario Con su nueva contraseña";

    $_SESSION['mensajeOk']='SOLICITUD REGISTRADA CON EXITO <p class="help-block">Se ha enviado un mensaje a $destinatario Con su nueva contraseña</p>';
    header('Location: ../util/okVista.php');



}else{

	echo "no se ha encontrado el usuario.Por favor verifique o comuniquese con el administrador";

}






?>
