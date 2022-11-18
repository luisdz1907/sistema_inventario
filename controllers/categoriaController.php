<?php

include 'models/categoriaModel.php';
class CategoriaController
{
    public function crearCategoria()
    {
        $nombre_categoria = isset($_POST["nombre_categoria"]) ? $_POST["nombre_categoria"] : null;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($nombre_categoria == null) {
                echo alertError("El nombre esta vacio");
                exit;
            } else {
                $result = CategoriaModel::crearCategoriaModel($nombre_categoria);

                if ($result) {
                    echo alertError("Categoria guardado");
                } else {
                    echo alertError("Error al guardar el usuario");
                }
            }
        }
    }

    static public function listaCategoria(){
        return CategoriaModel::listaCategoriaModel();
    }
}
