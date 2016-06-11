<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function fillPost($keys, $exclude = null) {
    $array = array();
    // Fem un bucle amb tota la informació post
    foreach ($_POST as $key => $val) {
        // Si la variable keys és un array
        if (is_array($keys)) {
            // I la clau actual és dins de l'array, llavors afegim la clau i el valor en el nou array
            if (in_array($key, $keys))
                $array[$key] = $val;
            // Si no és array i el seu contingut és exactament ALL
        }elseif ($keys === "ALL") {
            // Si l'exclude és especificat
            if (isset($exclude)) {
                // És un array
                if (is_array($exclude)) {
                    // I la clau actual NO hi és en l'array, llavors afegim la clau i el valor en el nou array
                    if (!in_array($key, $exclude))
                        $array[$key] = $val;
                    // Sinó és un array
                }else {
                    if ($key != $exclude)
                        $array[$key] = $val;
                }
                // Si no especifiquem l'exclude afegim tots els valors
            }else {
                $array[$key] = $val;
            }
            // Si no és cap de les anteriors (únicament especifiquem una clau) la retornem amb el seu valor
        } else {
            return $_POST[$keys];
        }
    }
    return $array;
}
