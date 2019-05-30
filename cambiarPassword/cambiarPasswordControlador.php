<?php
    @session_start();
    include '../util/utilModelo.php';
    $utilModelo = new utilModelo();
    $password = filter_input(INPUT_POST, 'password');


    $tabla = "usuario";
    //Variables de actuaizar Contraseña
    $campos = array("password");
    $valores = array($password);
    $utilModelo->modificar($tabla,$campos,$valores,'codigo',$_SESSION['usuario'][0]);
    $_SESSION['mensajeOk']="La contraseña fue cambiado con exito";
    header('Location: ../usuario/usuarioStandartVista.php');
    exit();