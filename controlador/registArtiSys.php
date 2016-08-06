<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../utils/ArrayUtils.php';
include_once '../modelo/dao/ArticuloDAO.php';
include_once '../modelo/dto/ArticuloDTO.php';

$datos = fillPost("ALL");
$articulo = new ArticuloDTO();
$articuloDAO = new ArticuloDAO();
foreach ($datos as $key => $val) {
    if ($key == "opcion") {
        $articulo->__set("categoria", $datos[$key]);
    }
    if ($key == "codigo") {
        $articulo->__set("codigoProducto", $datos[$key]);
    }
    if ($key == "nombre") {
        $articulo->__set("nomProducto", $datos[$key]);
    }
    if ($key == "cantidad") {
        $articulo->__set("numUnidades", $datos[$key]);
    }
    if ($key == "pesoEnvio") {
        $articulo->__set("pesoEnvio", $datos[$key]);
    }
    if ($key == "modelo") {
        $articulo->__set("modelo", $datos[$key]);
    }
    if ($key == "version") {
        $articulo->__set("version", $datos[$key]);
    }
    if ($key == "precio") {
        $articulo->__set("precio", $datos[$key]);
    }
    if ($key == "codigoProducto") {
        $articulo->__set("codigoProducto", $datos[$key]);
    }
}
$id_articulo = $articuloDAO->getIdArticulo();
echo print_r($id_articulo);
$articulo->__set("id_art", $id_articulo);
$status = $articuloDAO->registrarProducto($articulo);
//echo print_r($articulo);
if ($status == true) {
    $base = '../vista/Registro_productos_exitoso.php';
    $url = $base;
    header("Location: $url");
    if (!$status) {
        $base = '../vista/Registro_productos_fallido.php';
        $url = $base;
        header("Location: $url");
        exit;
    }
}
   
    

