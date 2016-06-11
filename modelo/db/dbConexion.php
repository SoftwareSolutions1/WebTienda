<?php
class dbConexion{  
    private $con;
    private $server = "localhost";
    private $user = "root";
    private $pass = "123456";
    private $db = "midb";
    public function conectar() {
        $this->con = mysql_connect($this->server, $this->user, $this->pass);
        mysql_set_charset('utf8');
        mysql_selectdb($this->db, $this->con);
    }
    public function cerrar() {
        mysql_close($this->con);
    }              
}

