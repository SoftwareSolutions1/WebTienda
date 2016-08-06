<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '/opt/lampp/htdocs/WebTienda/modelo/db/dbConexion.php';
include_once '/opt/lampp/htdocs/WebTienda/modelo/dto/ArticuloDTO.php';

class ArticuloDAO{
    
     public function getIdArticulo() {
        $con = new dbConexion();
        $con->conectar();
        $query = "SELECT COALESCE(MAX(id_art),0) AS id_new FROM articulos ";
        $res = mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "");
        $r = mysql_result($res, 0);
        $con->cerrar();
        $r++;
        return $r;
    }
    public function registrarProducto($articulo) {
        $con = new dbConexion();
        $con->conectar();
        $query = "INSERT INTO articulos VALUES ( "
                . "'$articulo->id_art', "
                . "'$articulo->numUnidades', "
                . "'$articulo->pesoEnvio', "
                . "'$articulo->modelo', "    
                . "'$articulo->version',"
                . "'$articulo->precio',"
                . "'$articulo->descProducto',"
                . "'$articulo->nomProducto',"
                . "'$articulo->codigoProducto',"
                . "'$articulo->categoria')";
                mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "" . exit());
        $con->cerrar();
        return true;
    }
    
     public function eliminar() {
        return true;
    }

    public function modificar() {
        return true;
    }

    public function consultar() {
        return true;
    }
}

