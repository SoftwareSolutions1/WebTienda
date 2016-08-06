<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once"/../modelo/dto/UsuarioDTO.php";
include_once"/../modelo/dao/UsuarioDAO.php";

/**
 * Description of getUsuario
 *
 * @author drakofire
 */
class GetSuscriptor {

    public function getSuscriptorDTO($id) {
        $usuarioDAO = new UsuarioDAO();
        $usuario = $usuarioDAO->getSuscriptor($id);
        return $usuario;
    }

}
