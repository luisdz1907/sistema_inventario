<?php
require 'db/database.php';

class UsuarioModel
{
    static public function usuarioId($username)
    {

        $query = "SELECT * FROM tbl_user WHERE usuario = :usuario";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(":usuario", $username, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(); //Retorna valor unico
    }
    static public function listaUsuarios()
    {
        $query = "SELECT * FROM tbl_user_data";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(); //Retorna valor unico
    }


    static public function guardarUsuario($data)
    {

        $query = "INSERT INTO tbl_user_data(nombre,tipo_documento,nro_documento,direccion,fecha_nacimiento,ciudad_residencia,celular)VALUES(:nombre,:tipo_documento,:nro_documento,:direccion,:fecha_nacimiento,:ciudad_residencia,:celular)";

        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(':nombre', $data["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(':tipo_documento', $data["tipo_documento"], PDO::PARAM_STR);
        $stmt->bindParam(':nro_documento', $data["nro_documento"], PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $data["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_nacimiento', $data["fecha_nacimiento"]);
        $stmt->bindParam(':ciudad_residencia', $data["ciudad_residencia"], PDO::PARAM_STR);
        $stmt->bindParam(':celular', $data["celular"], PDO::PARAM_STR);

        
        $resultado = $stmt->execute();

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }


}