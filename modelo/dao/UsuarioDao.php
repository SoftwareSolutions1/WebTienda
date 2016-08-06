<?php
include_once 'C:/xampp/htdocs/WebTienda/modelo/db/dbConexion.php';
include_once 'C:/xampp/htdocs/WebTienda/modelo/dto/UsuarioDTO.php';
    class UsuarioDAO{
        public function getIdSuscriptor() {
        $con = new dbConexion();
        $con->conectar();
        $query = "SELECT COALESCE(MAX(id_usuario),0) AS id_new FROM usuario ";
        $res = mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "");
        $r = mysql_result($res, 0);
        $con->cerrar();
        $r++;
        return $r;
    }
    
    public function insertarDatos($usuario) {
        $con = new dbConexion();
        $con->conectar();
        $query = "INSERT INTO usuario VALUES ( "
                . "'$usuario->id_usuario', "
                . "'$usuario->nombre', "
                . "'$usuario->apell_pat', "
                . "'$usuario->apell_mat', "
                . "'$usuario->email')";
                mysql_query($query) or die("Error al guardar la Informacion" . mysql_error() . "" . exit());
        $con->cerrar();
        return true;
    }

    public function getSuscriptor($id) {
        $con = new dbConexion();
        $con->conectar();
        $query = "SELECT * FROM usuario WHERE id_usuario = $id ";
        //var_dump("Esta es mi consulta".$query);
        $resultado = mysql_query($query) or die("Error en la consulta" . mysql_error() . "");
        $usuario = new UsuarioDTO();

        while ($fila = mysql_fetch_assoc($resultado)) {
            $usuario->id_usuario = $fila['id_usuario'];
            $usuario->nombre = $fila['nombre'];
            $usuario->apell_pat = $fila['apel_pat'];
            $usuario->apell_mat = $fila['apel_mat'];
            $usuario->email = $fila['email'];

        }
        $con->cerrar();
        return $usuario;
    }
}
