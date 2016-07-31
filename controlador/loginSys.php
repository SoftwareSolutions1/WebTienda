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
$id_suscriptor = $loginDAO->login($usuario);
/* observar el comportamineto de las consultas desde el usuarioDAO */
//echo 'El id es:';
echo print_r($id_suscriptor);



if (($id_suscriptor == 1 )||($id_suscriptor == 2)||($id_suscriptor == 3)) {
//    header('Location: ../vista/indexAdmin.php');//la nueva direcion
    session_start(); //inicia la sesion
    echo '   ingreso como administrador:     ';
    echo '    El id del usuario es:';
    echo print_r($id_suscriptor);
    exit;
} elseif ($id_suscriptor != "") {
//    header('Location: ../vista/indexingreso.php');
    session_start();
    echo '   Ingreso como usuario normal   ';
    echo '   El id del usuario es:   ';
    echo print_r($id_suscriptor);
    exit;
} else {
    echo '   Fallo el inicio de sesión   ';
    echo '  El id del usuario es:   ';
    echo print_r($id_suscriptor);
//    header("Location: ../vista/Error.php");
    exit;
}