<?php
    @session_start();
//    include 'usuarioModelo.php';
    include '../util/utilModelo.php';
    include '../util/util.php';
    $util = new util();
    $utilModelo = new utilModelo();
    $codigo = filter_input(INPUT_POST, 'lider');
    $valor = filter_input(INPUT_POST, 'valor');
    $fecha = $util->hoy();

//$campos es el nombre de los campos tal cual aparece en la base de datos
    $campos = array("codigoUsuario", "tipo", "fechaMovimiento", "valor");
//$valores son los valores a almacenar
    $valores = array("$codigo", "0", "$fecha", "$valor");
//la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
    $nombreDeTabla = "movimientos";
    if($codigo != "" ) {


        $utilModelo->insertar($nombreDeTabla, $campos, $valores);

        $nombreCampo = array("codigo");
        $valor1 = array("$codigo");
        $tabla = "usuario";
        $result = $utilModelo->mostrarregistros($tabla, $nombreCampo, $valor1);
        $fila = mysqli_fetch_array($result);
        $codigoCabeza = $fila['codigoReferido'];
        $util->pagarComision($codigo, $valor, 1, $codigo,$codigoCabeza);
        $_SESSION['mensajeOk'] = "El pago fue registrado con exito";
    }

   header('Location: registroPagoVista.php');
   exit();