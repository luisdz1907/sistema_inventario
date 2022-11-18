<?php
require_once 'db/database.php';

class UsuarioModel
{
    static public function usuarioLogin($username)
    {
        $query = "SELECT * FROM tbl_user WHERE usuario = :usuario";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(":usuario", $username, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(); //Retorna valor unico
    }

    static public function usuarioId($id)
    {
        $query = "SELECT * FROM tbl_user_data WHERE id = :id";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
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
        $stmt->bindParam(':nombre', $data["nombre"]);
        $stmt->bindParam(':tipo_documento', $data["tipo_documento"]);
        $stmt->bindParam(':nro_documento', $data["nro_documento"]);
        $stmt->bindParam(':direccion', $data["direccion"]);
        $stmt->bindParam(':fecha_nacimiento', $data["fecha_nacimiento"]);
        $stmt->bindParam(':ciudad_residencia', $data["ciudad_residencia"]);
        $stmt->bindParam(':celular', $data["celular"]);

        $resultado = $stmt->execute();

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    static public function actualizarUsuario($data, $id)
    {
        $query = "UPDATE tbl_user_data SET nombre =:nombre,tipo_documento=:tipo_documento,nro_documento=:nro_documento,direccion=:direccion,fecha_nacimiento=:fecha_nacimiento,ciudad_residencia=:ciudad_residencia,celular=:celular WHERE id =:id";

        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(':nombre', $data["nombre"]);
        $stmt->bindParam(':tipo_documento', $data["tipo_documento"]);
        $stmt->bindParam(':nro_documento', $data["nro_documento"]);
        $stmt->bindParam(':direccion', $data["direccion"]);
        $stmt->bindParam(':fecha_nacimiento', $data["fecha_nacimiento"]);
        $stmt->bindParam(':ciudad_residencia', $data["ciudad_residencia"]);
        $stmt->bindParam(':celular', $data["celular"]);
        $stmt->bindParam(':id', $id);

        $resultado = $stmt->execute();

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    static public function eliminarUsuario($id)
    {
        $query = "DELETE FROM tbl_user_data WHERE id=:id";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(":id", $id);

        $resultado = $stmt->execute() ? true : false;
        return $resultado;
    }
}
