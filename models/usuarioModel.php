<?php
require_once 'db/database.php';

class UsuarioModel
{
    static public function usuarioLogin($username)
    {
        $query = "SELECT * FROM tbl_user_data WHERE usuario = :usuario";
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

    static public function verficarDocumento($documento)
    {
        $query = "SELECT COUNT (*) FROM tbl_user_data WHERE nro_documento =:documento";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(":documento", $documento);
        $stmt->execute();

        if ($stmt->fetchColumn() > 0) {
            return true;
        } else {
            return false;
        }
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

        $query = "INSERT INTO tbl_user_data(nombre,tipo_documento,nro_documento,direccion,fecha_nacimiento,ciudad_residencia,celular, usuario, password, perfil)VALUES(:nombre,:tipo_documento,:nro_documento,:direccion,:fecha_nacimiento,:ciudad_residencia,:celular, :usuario, :password, :perfil)";

        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(':nombre', $data["nombre"]);
        $stmt->bindParam(':tipo_documento', $data["tipo_documento"]);
        $stmt->bindParam(':nro_documento', $data["nro_documento"]);
        $stmt->bindParam(':direccion', $data["direccion"]);
        $stmt->bindParam(':fecha_nacimiento', $data["fecha_nacimiento"]);
        $stmt->bindParam(':ciudad_residencia', $data["ciudad_residencia"]);
        $stmt->bindParam(':celular', $data["celular"]);
        $stmt->bindParam(':usuario', $data["usuario"]);
        $stmt->bindParam(':password', $data["password"]);
        $stmt->bindParam(':perfil', $data["perfil"]);

        $resultado = $stmt->execute();

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    static public function actualizarUsuario($data, $id)
    {
        $query = "UPDATE tbl_user_data SET nombre =:nombre,tipo_documento=:tipo_documento,nro_documento=:nro_documento,direccion=:direccion,fecha_nacimiento=:fecha_nacimiento,ciudad_residencia=:ciudad_residencia,celular=:celular, usuario=:usuario, password=:password, perfil=:perfil WHERE id =:id";

        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(':nombre', $data["nombre"]);
        $stmt->bindParam(':tipo_documento', $data["tipo_documento"]);
        $stmt->bindParam(':nro_documento', $data["nro_documento"]);
        $stmt->bindParam(':direccion', $data["direccion"]);
        $stmt->bindParam(':fecha_nacimiento', $data["fecha_nacimiento"]);
        $stmt->bindParam(':ciudad_residencia', $data["ciudad_residencia"]);
        $stmt->bindParam(':celular', $data["celular"]);
        $stmt->bindParam(':usuario', $data["usuario"]);
        $stmt->bindParam(':password', $data["password"]);
        $stmt->bindParam(':perfil', $data["perfil"]);
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
