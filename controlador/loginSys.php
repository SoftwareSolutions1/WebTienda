<?php

include '../utils/ArrayUtils.php';
include_once '../modelo/dao/usuarioDAO.php';
include_once '../modelo/dto/UsuarioDTO.php';


$datos = fillPost("ALL");
$usuario = new UsuarioDTO();
$usuarioDAO = new usuarioDAO();

foreach ($datos as $key => $val) {
    if ($key == "usuarioLogin") {
        $usuario->__set("usuario", $datos[$key]);
    }
    if ($key == "passLogin") {
        $usuario->__set("contrasenia", $datos[$key]);
    }
}
$id_suscriptor = $usuarioDAO->login($usuario);
/*observar el comportamineto de las consultas desde el usuarioDAO
echo 'El id es:';
echo print_r($id_suscriptor);*/

    if ($id_suscriptor != "") {
    header('Location: ../vista/contact.html');//la nueva direcion
    session_start();//inicia la sesion
    exit;
} else {
    header("Location: ../vista/Error.php");
    exit;
}