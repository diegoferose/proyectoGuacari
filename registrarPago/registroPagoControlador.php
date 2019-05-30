<?php
    @session_start();
//    include 'usuarioModelo.php';
    include '../util/utilModelo.php';
    include '../util/util.php';
    $util = new util();
    $utilModelo = new utilModelo();
    $codigo = filter_input(INPUT_POST, 'lider');
    $valor = filter_input(INPUT_POST, 'valor');
    $fecha = filter_input(INPUT_POST, 'fecha');

//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("codigoUsuario", "tipo", "fechaMovimiento", "valor");
//$valores son los valores a almacenar
    $valores = array("$codigo", "0", "$fecha", "$valor");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "movimientos";
    $utilModelo->insertar($nombreDeTabla, $campos, $valores);

    $util->registrarComision($codigo, $valor, 1);

    $_SESSION['mensajeOk'] = "El pago fue registrado con exito";
    header('Location: registroPagoVista.php');
    exit();