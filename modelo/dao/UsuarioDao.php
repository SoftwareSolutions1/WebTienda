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
        $con = new dbConnection();
        $con->conectar();
        $query = "SELECT * FROM suscriptor WHERE id_suscriptor = $id ";
        //var_dump("Esta es mi consulta".$query);
        $resultado = mysql_query($query) or die("Error en la consulta" . mysql_error() . "");
        $suscriptor = new SuscriptorDTO();

        while ($fila = mysql_fetch_assoc($resultado)) {
            $suscriptor->id_suscriptor = $fila['id_suscriptor'];
            $suscriptor->clave_suscriptor = $fila['clave_suscriptor'];
            $suscriptor->nombre = $fila['nombre'];
            $suscriptor->apellido_paterno = $fila['apellido_paterno'];
            $suscriptor->apellido_materno = $fila['apellido_materno'];
            $suscriptor->email = $fila['email'];
            $suscriptor->fecha_nacimiento = $fila['fecha_nacimiento'];
        }
        $con->cerrar();
        return $suscriptor;
    }
}
