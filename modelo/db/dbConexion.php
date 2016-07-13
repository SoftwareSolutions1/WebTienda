<?php
class dbConexion{  
    private $con;
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "webstore";
    public function conectar() {
        $this->con = mysql_connect($this->server, $this->user, $this->pass);
        mysql_set_charset('utf8');
        mysql_selectdb($this->db, $this->con);
         if ($this->con->connect_errno){
            die("fallo al tratar  de conectar con MySQL: (".$this->con->connect_errno.") "); 
            }
    }
    public function cerrar() {
        mysql_close($this->con);
    }              
}

