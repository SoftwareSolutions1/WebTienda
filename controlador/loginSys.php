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
/*observar el comportamineto de las consultas desde el usuarioDAO*/
echo 'El id es:';
echo print_r($id_suscriptor);

    if ($id_suscriptor != "") {
    header('Location: ../vista/indexingreso.php');//la nueva direcion
    session_start();//inicia la sesion
    exit;
} else {
    header("Location: ../vista/Error.php");
    exit;
}