<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'goliat.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@todosconurdinola.com';                     // SMTP username
    $mail->Password   = 'Osjado1987';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@todosconurdinola.com', 'OSCAR DORADO');
    $mail->addAddress('oscar871220@hotmail.com', 'Diego');     // Add a recipient
   

    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Preuba numero 54';
    $mail->Body    = 'Esto es una prueba por favor no devolver este mesaje <b>Gracias!</b>';
    $mail->AltBody = 'No se para que sirve esta parte asi que probaré';

    $mail->send();
    echo 'Mensaje enviado con exito muy buen trabajo ';
} catch (Exception $e) {
    echo "Algo salio mal vaya duerma y rectifique: {$mail->ErrorInfo}";
}



 ?>