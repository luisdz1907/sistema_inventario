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

                $resul = $this->usuarioLogin($username);
                //Verificamos la contraseña
                // $auth = password_verify($password, $resul["password"]);

                // if ($auth) {
                //     // Cambiamos el valor de la session
                //     $_SESSION["login"] = true;
                //     header('Location: inicio');
                // } else {
                //     echo alertError("Error al ingresar, credenciales inválidas");
                // }

                if (
                    $resul["usuario"] == $username &&
                    $resul["password"] == $password
                ) {
                    // Cambiamos el valor de la session
                    $_SESSION["login"] = true;
                    header('Location: inicio');
                } else {
                    echo alertError("Error al ingresar, credenciales inválidas");
                }
            }
        }
    }

    public function usuarioLogin($username)
    {
        $resultado = UsuarioModel::usuarioLogin($username);
        return $resultado;
    }

    public function crearUsuario()
    {
        $nombre =  $_POST["nombre"];
        $tipo_documento =  $_POST["tipo_documento"];
        $nro_documento =  $_POST["nro_documento"];
        $direccion =  $_POST["direccion"];
        $fecha_nacimiento =  $_POST["fecha_nacimiento"];
        $ciudad_residencia =  $_POST["ciudad_residencia"];
        $celular =  $_POST["celular"];


        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
            //Creamos un arreglo con los valores capturados
            $data = array(
                "nombre" => $nombre,
                "tipo_documento" => $tipo_documento,
                "nro_documento" => $nro_documento,
                "direccion" => $direccion,
                "fecha_nacimiento" => $fecha_nacimiento,
                "ciudad_residencia" => $ciudad_residencia,
                "celular" => $celular
            );


            $result = UsuarioModel::guardarUsuario($data);

            //Mostramos alerta segun el return
            if ($result) {
                echo alertError("Usuario guardado");
            } else {
                echo alertError("Error al guardar el usuario");
            }
        }
    }
    public function actualizarUsuario()
    {
        $id = $_GET["id"] ?? null;

        if (isset($id)) {
            $nombre =  $_POST["nombre"];
            $tipo_documento =  $_POST["tipo_documento"];
            $nro_documento =  $_POST["nro_documento"];
            $direccion =  $_POST["direccion"];
            $fecha_nacimiento =  $_POST["fecha_nacimiento"];
            $ciudad_residencia =  $_POST["ciudad_residencia"];
            $celular =  $_POST["celular"];

            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                //Creamos un arreglo con los valores capturados
                $data = array(
                    "nombre" => $nombre,
                    "tipo_documento" => $tipo_documento,
                    "nro_documento" => $nro_documento,
                    "direccion" => $direccion,
                    "fecha_nacimiento" => $fecha_nacimiento,
                    "ciudad_residencia" => $ciudad_residencia,
                    "celular" => $celular
                );


                $result = UsuarioModel::actualizarUsuario($data, $id);

                //Mostramos alerta segun el return
                if ($result) {
                    echo alertError("Usuario actualizado");
                } else {
                    echo alertError("Error al guardar el usuario");
                }
            }
        }
    }

    public function usuarioId($id)
    {
        $resultado = UsuarioModel::usuarioId($id);
        return $resultado;
    }

    static public function eliminarUsuario($id)
    {
        $resultado = UsuarioModel::eliminarUsuario($id);

        if ($resultado) {
            echo
            '<Script>
        alert("Usuario Eliminado");
        </Script>';
        }
    }


    static public function listaUsuarios()
    {
        $resultado = UsuarioModel::listaUsuarios();
        return $resultado;
    }
}
