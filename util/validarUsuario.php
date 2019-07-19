<?php
include_once "utilModelo.php";


$user =$_POST["b"];//recibe el nombre de usuario para validar
$referido =$_POST["b"];//recibe el codigo de referido que se verica su existencia
$clave =$_POST["clave"];//clave que se envia para saber que funcion utilizar 0 = validar usuario 1 = validar referido 



      if($clave==0) {
        
            validarUsuario($user);
      }else{
            validarReferido($referido);
      }

      function validarUsuario($b) {
        $utilModelo = new utilModelo();
            $result = $utilModelo->consultarVariasTablas("*","usuario","usuario='$b'");
              $rowcount=mysqli_num_rows($result);
            
            
                if($rowcount!= 0) {
            echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";

                }else{
                  echo( "<span style='font-weight:bold;color:green;'>Usuario Disponible.</span>");

            }
      
    }
    function validarReferido($b) {
        $utilModelo = new utilModelo();
            $result = $utilModelo->consultarVariasTablas("*","usuario","codigo='$b'");
            $rowcount=mysqli_num_rows($result);            
                if($rowcount!= 0) {
                    echo( "<span style='font-weight:bold;color:green;'>Codigo Valido.</span>");

                }else{
                 
                     echo "<span style='font-weight:bold;color:red;'>No se encuentra el referido</span>";

            }
      
    }



 ?>
