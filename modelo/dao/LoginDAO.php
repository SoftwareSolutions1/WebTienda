<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'C:/xampp/htdocs/WebTienda/modelo/db/dbConexion.php';
include_once 'C:/xampp/htdocs/WebTienda/modelo/dto/LoginDTO.php';

class LoginDAO{
        public function login($usuario) {
        
         $con = new dbConexion();
         $con->conectar();
         $query ="SELECT * FROM login WHERE  usuario = '$usuario->usuario' AND password = '$usuario->password'";
         $result = mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "");
         $data = mysql_fetch_assoc($result);
         $id = $data['id_usuario'];
         $con->cerrar();
         return $id;
         
    }
    
    public function getUsuario($id_suscriptor) {
        $con = new dbConnection();
        $con->conectar();
        $query = "SELECT id FROM usuarios_suscriptor WHERE id_suscriptor = '$id_suscriptor'";
        $result = mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "");
        $data = mysql_fetch_assoc($result);
        $usuario = new UsuarioDTO();
        $usuario->id_suscriptor = $data['id_suscriptor'];
        $usuario->usuario = $data['usuario'];
        $con->cerrar();
        return $id;
    }
    
    public function getIdSuscriptor() {
        $con = new dbConnection();
        $con->conectar();
        $query = "SELECT COALESCE(MAX(id_cliente),0) AS id_cliente FROM clientes ";
        $res = mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "");
        $r = mysql_result($res, 0);
        $con->cerrar();
        $r++;
        return $r;
    }
    
    public function insertarDatosLogin($userLogin){
        $con = new dbConexion();
        $con->conectar();
        $query = "INSERT INTO login(id_usuario, usuario, password)
                    VALUES( '$userLogin->id_usuario', '$userLogin->usuario','$userLogin->password')";
        mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "" . exit());
        //echo "$query";
        $con->cerrar();
       //$prueb = "Funciona";
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