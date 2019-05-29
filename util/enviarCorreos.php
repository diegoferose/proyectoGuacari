<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';


enviarCorreos("oscar8712220@hotmail.com","prueba55","esto es un mensaje");

function enviarCorreos($destinatario,$asunto,$mensaje){


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'goliat.colombiahosting.com.co';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@todosconurdinola.com';                     // SMTP username
    $mail->Password   = 'Osjado1987';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@todosconurdinola.com', 'Administrador');
    $mail->addAddress($destinatario, 'oscar8712220');     // Add a recipient



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $mensaje;
    $mail->AltBody = 'No se para que sirve esta parte asi que probaré';

    $mail->send();
    echo 'Mensaje enviado con exito muy buen trabajo ';

} catch (Exception $e) {
    echo "Algo salio mal vaya duerma y rectifique: {$mail->ErrorInfo}";
    echo $destinatario.$asunto.$mensaje;
}
}


 ?>
