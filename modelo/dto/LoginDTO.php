<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class LoginDTO{
    
    private $id_usuario;
    private $usuario;
    private $password;
    
    public function __set($var, $valor) {
        if (property_exists(__CLASS__, $var)) {
            $this->$var = $valor;
        } else {
            echo "No existe el atributo $var.";
        }
    }

    public function __get($var) {
        if (property_exists(__CLASS__, $var)) {
            return $this->$var;
        }
        return NULL;
    }
}
    