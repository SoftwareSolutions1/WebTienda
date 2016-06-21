<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UsuarioDTO{
    
    private $id_cliente;
    private $nombre;
    private $apel_pat;
    private $apel_mat;
    private $calle;
    private $colonia;
    private $cod_post;
    private $ciudad;
    private $pais;
    private $num_tarjeta;
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

