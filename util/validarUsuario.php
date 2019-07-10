<?php
include_once "utilModelo.php";


$user =$_POST["b"];
//$user="osdo1987";


      if(!empty($user)) {
            comprobar($user);
      }

      function comprobar($b) {
        $utilModelo = new utilModelo();
            $result = $utilModelo->consultarVariasTablas("*","usuario","usuario='$b'");

            while ($fila = mysqli_fetch_array($result)) {
                if ($fila != NULL) {
            echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";

            }else{

                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
            }
      }
    }

 ?>
