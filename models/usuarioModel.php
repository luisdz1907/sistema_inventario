<?php
require 'db/database.php';

class UsuarioModel
{
    static public function usuarioId($username)
    {

        $query = "SELECT * FROM usuarios WHERE usuario = :usuario";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(":usuario", $username, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(); //Retorna valor unico
    }
    static public function listaUsuarios()
    {
        $query = "SELECT * FROM usuarios";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(); //Retorna valor unico
    }


    static public function guardarUsuario($data)
    {
        
        $query = "INSERT INTO usuarios(nombre, usuario, password, perfil) VALUES (:nombre, :usuario, :password, :perfil)";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(':nombre', $data["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $data["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data["password"], PDO::PARAM_STR);
        $stmt->bindParam(':perfil', $data["perfil"], PDO::PARAM_STR);
        $resultado = $stmt->execute();

         if ($resultado) {
             return true;
         } else {
             return false;
         }
    }


}