<?php

include '../utils/ArrayUtils.php';
include_once '../modelo/dao/loginDAO.php';
include_once '../modelo/dto/loginDTO.php';


$datos = fillPost("ALL");
$usuario = new LoginDTO();
$loginDAO = new LoginDAO();

foreach ($datos as $key => $val) {
    if ($key == "userLogin") {
        $usuario->__set("usuario", $datos[$key]);
    }
    if ($key == "passlogin") {
        $usuario->__set("password", $datos[$key]);
    }
}
//echo print_r($usuario);
$id_usuario = $loginDAO->login($usuario);
/* observar el comportamineto de las consultas desde el usuarioDAO */
//echo 'El id es:';




if (($id_usuario == 1 ) || ($id_usuario == 2) || ($id_usuario == 3)) {

    $base = '../vista/indexAdmin.php';
    $url = $base;
    session_start(); //inicia la sesion
    $_SESSION['id_usuario'] = $id_usuario;
    header("Location: $url"); //la nueva direcion
//    echo '   ingreso como administrador:     ';
//    echo '    El id del usuario es:';
//    echo print_r($id_suscriptor);
    exit;
} elseif ($id_usuario != "") {
    $base = '../vista/indexingreso.php';
    $url = $base;
    session_start();
    $_SESSION['id_usuario'] = $id_usuario;
    //echo print_r($id_suscriptor);
    header("Location: $url");
//    echo '   Ingreso como usuario normal   ';
//    echo '   El id del usuario es:   ';
//    echo print_r($id_suscriptor);
    exit;
} else {
//    echo '   Fallo el inicio de sesión   ';
//    echo '  El id del usuario es:   ';
//    echo print_r($id_suscriptor);
    header("Location: ../vista/indexFallo.php");
    exit;
}