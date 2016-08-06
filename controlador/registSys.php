<?php
include '../utils/ArrayUtils.php';
include_once '../modelo/dao/UsuarioDAO.php';
include_once '../modelo/dto/UsuarioDTO.php';
include_once '../modelo/dao/loginDAO.php';
include_once '../modelo/dto/loginDTO.php';

$datos = fillPost("ALL");
$usuario = new UsuarioDTO();
$usuarioDAO = new UsuarioDAO();
$userLogin = new LoginDTO();
$userLoginDAO = new LoginDAO();

foreach ($datos as $key => $val) {
    if ($key == "nombre") {
        $usuario->__set("nombre", $datos[$key]);
    }
    if ($key == "apell_pat") {
        $usuario->__set("apell_pat", $datos[$key]);
    }
    if ($key == "apell_mat") {
        $usuario->__set("apell_mat", $datos[$key]);
    }
    if ($key == "usuario") {
        $userLogin->__set("usuario", $datos[$key]);
    }
    if ($key == "email") {
        $usuario->__set("email", $datos[$key]);
    }
    if ($key == "password") {
        $userLogin->__set("password", $datos[$key]);
    }
}
/* observar el comportamineto de las consultas desde el usuarioDAO */
$id_usuario = $usuarioDAO->getIdSuscriptor();
$usuario->__set("id_usuario", $id_usuario);
$userLogin->__set("id_usuario", $id_usuario);
//echo "El id es:  $id_cliente";
//echo print_r($userLogin);
$status = $usuarioDAO->insertarDatos($usuario);
$statusLogin = $userLoginDAO->insertarDatosLogin($userLogin);
//echo print_r($statusLogin);

if ($status) {
    $base = '../vista/indexingreso.php';
    $url = $base;
    session_start();
    $_SESSION['id_usuario'] = $id_usuario;
    //echo print_r($id_suscriptor);
    header("Location: $url");


    exit;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

