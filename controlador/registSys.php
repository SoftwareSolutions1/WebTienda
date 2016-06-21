<?php

include '../utils/ArrayUtils.php';
include_once '../modelo/dao/usuarioDAO.php';
include_once '../modelo/dto/UsuarioDTO.php';


$datos = fillPost("ALL");
$usuario = new UsuarioDTO();
$usuarioDAO = new usuarioDAO();

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
        if ($key == "calle") {
        $usuario->__set("calle", $datos[$key]);
    }
        if ($key == "colonia") {
        $usuario->__set("colonia", $datos[$key]);
    }
    if ($key == "Cp") {
        $usuario->__set("Cp", $datos[$key]);
    }
        if ($key == "ciudad") {
        $usuario->__set("ciudad", $datos[$key]);
    }
        if ($key == "pais") {
        $usuario->__set("pais", $datos[$key]);
    }
        if ($key == "nom_tar") {
        $usuario->__set("nom_tar", $datos[$key]);
    }
    if ($key == "usuarioLogin") {
        $usuario->__set("usuario", $datos[$key]);
    }
    if ($key == "passLogin") {
        $usuario->__set("contrasenia", $datos[$key]);
    }
    $idSuscriptor = $UsuarioDAO->getIdSuscriptor();
    $suscriptor->__set("id_cliente", $idSuscriptor);
    $status = $UsuarioDAO->insertar($suscriptor);
    if ($status) {
    $usuario->__set("id_suscriptor", $idSuscriptor);
    $status = $usuarioDAO->insertar($usuario);

    if ($status) {
        $data = array(
            'id' => $idSuscriptor
        );
        header("Location: ../vista/contact.html");
        exit;
    }
}

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

