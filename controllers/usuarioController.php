<?php

include 'models/usuarioModel.php';

class UsuarioController
{
    public function loginUsuario()
    {
        $username = isset($_POST["username"]) ? $_POST["username"] : null;
        $password = isset($_POST["password"]) ? $_POST["password"] : null;


        if (isset($password)) {
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $password) &&
                preg_match('/^[a-zA-Z0-9]+$/', $username)
            ) {

                $resul = $this->usuarioLogin($username);
                // Verificamos la contraseña
                $auth = password_verify($password, $resul["password"]);

                if ($auth) {
                    // Cambiamos el valor de la session
                    $_SESSION["login"] = true;
                    header('Location: inicio');
                } else {
                    echo alertError("Error al ingresar, credenciales inválidas");
                }

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
        $nombre =  isset($_POST["nombre"]) ? $_POST["nombre"] : '';
        $tipo_documento =  isset($_POST["tipo_documento"]) ? $_POST["tipo_documento"] : '';
        $nro_documento =  isset($_POST["nro_documento"]) ? $_POST["nro_documento"] : '';
        $direccion =  isset($_POST["direccion"]) ? $_POST["direccion"] : '';
        $fecha_nacimiento =  isset($_POST["fecha_nacimiento"]) ? $_POST["fecha_nacimiento"] : '';
        $ciudad_residencia =  isset($_POST["ciudad_residencia"]) ? $_POST["ciudad_residencia"] : '';
        $celular =  isset($_POST["celular"]) ? $_POST["celular"] : '';

        $usuario =  isset($_POST["usuario"]) ? $_POST["usuario"] : '';
        $password =  isset($_POST["password"]) ? $_POST["password"] : '';
        $perfil =  isset($_POST["perfil"]) ? $_POST["perfil"] : '';


        if ($_SERVER["REQUEST_METHOD"] === "POST") {


            //    echo validarInputText($tipo_documento, "El elija el tipo de documento");
            //    echo validarInputText($nro_documento, "Ingrese el numero del documento");
            //    echo validarInputText($direccion, "El direccion no puede ser vacio");
            //    echo validarInputText($nombre, "La ciudad no puede ser vacio");
            //    echo validarInputText($nombre, "El usuario no puede ser vacio");
            //    echo validarInputText($nombre, "El password no puede ser vacio");
            //    echo validarInputText($nombre, "El perfil no puede ser vacio");

            //Encriptamos el password
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);

            //Creamos un arreglo con los valores capturados
            $data = array(
                "nombre" => $nombre,
                "tipo_documento" => $tipo_documento,
                "nro_documento" => $nro_documento,
                "direccion" => $direccion,
                "fecha_nacimiento" => $fecha_nacimiento,
                "ciudad_residencia" => $ciudad_residencia,
                "celular" => $celular,
                "usuario" => $usuario,
                "password" => $passwordHash,
                "perfil" => $perfil,
            );


            $result = UsuarioModel::guardarUsuario($data);

            //Mostramos alerta segun el return
            if ($result) {
                echo alertSuccess("Usuario guardado");
            } else {
                echo alertError("Error al guardar el usuario");
            }
        }
    }
    public function actualizarUsuario()
    {
        $id = $_GET["id"] ?? null;

        if (isset($id)) {
            $nombre =  isset($_POST["nombre"]) ? $_POST["nombre"] : null;
            $tipo_documento =  isset($_POST["tipo_documento"]) ? $_POST["tipo_documento"] : null;
            $nro_documento =  isset($_POST["nro_documento"]) ? $_POST["nro_documento"] : null;
            $direccion =  isset($_POST["direccion"]) ? $_POST["direccion"] : null;
            $fecha_nacimiento =  isset($_POST["fecha_nacimiento"]) ? $_POST["fecha_nacimiento"] : null;
            $ciudad_residencia =  isset($_POST["ciudad_residencia"]) ? $_POST["ciudad_residencia"] : null;
            $celular =  isset($_POST["celular"]) ? $_POST["celular"] : null;

            $usuario =  isset($_POST["usuario"]) ? $_POST["usuario"] : null;
            $password =  isset($_POST["password"]) ? $_POST["password"] : null;
            $perfil =  isset($_POST["perfil"]) ? $_POST["perfil"] : null;

            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                $passwordHash = password_hash($password, PASSWORD_BCRYPT);

                //Creamos un arreglo con los valores capturados
                $data = array(
                    "nombre" => $nombre,
                    "tipo_documento" => $tipo_documento,
                    "nro_documento" => $nro_documento,
                    "direccion" => $direccion,
                    "fecha_nacimiento" => $fecha_nacimiento,
                    "ciudad_residencia" => $ciudad_residencia,
                    "celular" => $celular,
                    "usuario" => $usuario,
                    "password" => $passwordHash,
                    "perfil" => $perfil,
                );


                $result = UsuarioModel::actualizarUsuario($data, $id);

                //Mostramos alerta segun el return
                if ($result) {
                    echo alertSuccess("Usuario actualizado");
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
