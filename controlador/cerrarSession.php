<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../vista/index.php");
    echo "<meta content='0;URL=../../index.php' http-equiv='REFRESH'> </meta>";
    session_destroy();
//esto ocurre cuando la sesion caduca.
} else {
    
    //echo "Has cerrado la sesion";
    header("Location: ../vista/indexingreso.php");
    echo "<meta content='0;URL=../../index.php' http-equiv='REFRESH'> </meta>";
}
