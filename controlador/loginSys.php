<?php

include '../utils/ArrayUtils.php';
include_once '../modelo/dao/UsuarioDAO.php';
include_once '../modelo/dto/UsuarioDTO.php';


$datos = fillPost("ALL");
$usuario = new UsuarioDTO();
$usuarioDAO = new UsuarioDAO();

foreach ($datos as $key => $val) {
        if ($key == "userLogin") {
        $usuario->__set("usuario", $datos[$key]);
    }
        if ($key == "passlogin") {
        $usuario->__set("password", $datos[$key]);
    }
    
}
$id_suscriptor = $usuarioDAO->login($usuario);
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