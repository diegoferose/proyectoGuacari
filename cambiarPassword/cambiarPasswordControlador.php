<?php
    @session_start();
    include '../util/utilModelo.php';
    $utilModelo = new utilModelo();
    $password = filter_input(INPUT_POST, 'password');
