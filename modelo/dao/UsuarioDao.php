<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'C:/xampp/htdocs/WebTienda/modelo/db/dbConexion.php';
include_once 'C:/xampp/htdocs/WebTienda/modelo/dto/UsuarioDTO.php';

class usuarioDAO{
        public function login($usuario) {
        
         $con = new dbConexion();
         $con->conectar();
         $query ="SELECT * FROM usuarios WHERE usuario = '$usuario->usuario' AND contrasenia = '$usuario->contrasenia'";
         $result = mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "");
         $data = mysql_fetch_assoc($result);
         $id = $data['id'];
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
    
    public function insert(){
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