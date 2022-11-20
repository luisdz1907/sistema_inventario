<?php
require_once 'db/database.php';

class CategoriaModel
{
    static public function crearCategoriaModel($nombre_categoria)
    {
        $query = "INSERT INTO tbl_categoria(	nombre_categoria ) VALUES (:nombre_categoria)";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(':nombre_categoria', $nombre_categoria);

        $resultado = $stmt->execute();

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    static public function listaCategoriaModel()
    {
        $query = "SELECT * FROM tbl_categoria";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
