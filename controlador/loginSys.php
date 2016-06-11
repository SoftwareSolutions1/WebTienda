<?php
include '../utils/ArrayUtils.php';
include_once '../modelo/dao/UsuarioDao.php';
include_once '../modelo/dto/UsuarioDTO.php';

$datos = fillPost("ALL");
$usuario = new UsuarioDTO();
$usuarioDAO = new usuarioDao();

foreach ($datos as $key => $val){
    if ($key == "userLogin"){
        $usuario->__set("usuario", $datos[$key]);
    }
    if ($key == "passLogin") {
        $usuario->__set("contrasenia", $datos[$key]);        
    }
}
$id = $usuarioDAO->login($usuario);

if ($id !=""){
$base = '../vista/prueba.php';
$url = $base;
session_start();
$_SESSION['id'] = $id;
header("Location: $url");
exit;
} else{ 
    $data = array('mesnaje'=> "El usuario y/o contraseña es incorrecta.");
    $base = '../vista/index.php';
    $url = $base;
    header("Location: $url");
    exit;
}

