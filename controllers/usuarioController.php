<?php

include 'models/usuarioModel.php';

class UsuarioController
{
    public function loginUsuario()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (isset($password)) {
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $password) &&
                preg_match('/^[a-zA-Z0-9]+$/', $username)
            ) {

                $resul = $this->usuarioId($username);

                //Verificamos la contraseña
                $auth = password_verify($password, $resul["password"]);

                if ($auth) {
                    // Cambiamos el valor de la session
                    $_SESSION["login"] = true;
                    header('Location: inicio');
                } else {
                    echo alertError("Error al ingresar, credenciales inválidas");
                }
            }
        }
    }

    public function crearUsuario()
    {
        $nombre = $_POST["nombre"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $perfil = $_POST["perfil"];
        $imagen_perfil = $_FILES["imagen"];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            //Comprobamos que el usuario no exita en la bd
            $userExist = $this->usuarioId($usuario);
            if ($userExist) {
                echo alertError("Usuario ya existe");
            }

            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $nombre) && preg_match('/^[a-zA-Z0-9]+$/', $usuario) &&
                preg_match('/^[a-zA-Z0-9]+$/', $password)
            ) {

                //Encriptamos la contraseña
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                //Creamos un arreglo con los valores capturados
                $data = array(
                    "nombre" => $nombre,
                    "usuario" => $usuario,
                    "password" => $passwordHash,
                    "perfil" => $perfil
                );

                $result = UsuarioModel::guardarUsuario($data);

                //Mostramos alerta segun el return
                if ($result) {
                    header('Location: usuarios');
                } else {
                    echo alertError("Error al guardar el usuario");
                }
            }
        }
    }

    public function usuarioId($username)
    {
        $resultado = UsuarioModel::usuarioId($username);
        return $resultado;
    }

    static public function listaUsuarios()
    {
        $resultado = UsuarioModel::listaUsuarios();
        return $resultado;
    }

}