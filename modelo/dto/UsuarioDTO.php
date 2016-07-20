<?php
class UsuarioDTO{
    
    private $id_usuario;
    private $nombre;
    private $apell_pat;
    private $apell_mat;
    private $email;
    
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