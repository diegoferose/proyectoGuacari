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
    $mail->Host       = 'goliat.colombiahosting.com.co';  // Specify main and backup SMTP servers
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
    $mail->Body    = '<html lang=\"es\" dir=\"ltr\">
      <head>
        <meta charset=\"utf-8\">
        <style media=\"screen\">
          * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif;
      color: #333;
    }

    table {
      text-align: left;
      line-height: 40px;
      border-collapse: separate;
      border-spacing: 0;
      border: 2px solid #ed1c40;
      width: 500px;
      margin: 50px auto;
      border-radius: .25rem;
    }

    thead tr:first-child {
      background: #ed1c40;
      color: #fff;
      border: none;
    }

    th:first-child,
    td:first-child {
      padding: 0 15px 0 20px;
    }

    th {
      font-weight: 500;
    }

    thead tr:last-child th {
      border-bottom: 3px solid #ddd;
    }

    tbody tr:hover {
      background-color: #f2f2f2;
      cursor: default;
    }

    tbody tr:last-child td {
      border: none;
    }

    tbody td {
      border-bottom: 1px solid #ddd;
    }

    td:last-child {
      text-align: right;
      padding-right: 10px;
    }

    .button {
      color: #aaa;
      cursor: pointer;
      vertical-align: middle;
      margin-top: -4px;
    }

    .edit:hover {
      color: #0a79df;
    }

    .delete:hover {
      color: #dc2a2a;
    }
        </style>

      </head>
      <body>

        <table>
      <thead>
        <tr>
          <th colspan=\"2\">solicitud de retiro</th>
        </tr>
        <tr>
          <th >Cantida solicitada</th>
          <th><h1>300.000</h1></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>NOMBRE</td>
          <td>OSCAR JAVIER DORADO</td>
        </tr>
        <tr>
          <td>FECHA SOLICITUD</td>
          <td >24 MAYO 2019</td>
        </tr>
        <tr>
          <td>SALDO</td>
          <td><h2>0</h2></td>

        </tr>
      </tbody>
    </table>


      </body>
    </html>
';
    $mail->AltBody = 'No se para que sirve esta parte asi que probaré';

    $mail->send();
    echo 'Mensaje enviado con exito muy buen trabajo ';
} catch (Exception $e) {
    echo "Algo salio mal vaya duerma y rectifique: {$mail->ErrorInfo}";
}



 ?>
