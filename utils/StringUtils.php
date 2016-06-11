<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class StringUtils {

    public function getClaveSuscriptor($idSuscriptor, $int_count) {
        $claveSuscriptor;
        $count = $int_count - strlen($idSuscriptor);

        for ($i = 0; $i < $count; $i++) {
            $claveSuscriptor .= "0";
        }

        $resultado = 'BXN' . $claveSuscriptor . $idSuscriptor;

        return $resultado;
    }

    public function getClaveSuscriptorSinBXN($idSuscriptor, $int_count) {
        $claveSuscriptor;
        $count = $int_count - strlen($idSuscriptor);

        for ($i = 0; $i < $count; $i++) {
            $claveSuscriptor .= "0";
        }

        $resultado = $claveSuscriptor . $idSuscriptor;

        return $resultado;
    }

    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

}
