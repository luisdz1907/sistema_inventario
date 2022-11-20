<?php
require_once 'models/productoModel.php';

class ProductoController{

    public function crearProducto(){
        $nombre_producto = isset($_POST["nombre_producto"]) ? $_POST["nombre_producto"] : null;
        $precio_costo = isset($_POST["precio_costo"]) ? $_POST["precio_costo"] : null;
        $precio_venta = isset($_POST["precio_venta"]) ? $_POST["precio_venta"] : null;
        $iva = isset($_POST["iva"]) ? $_POST["iva"] : null;
        $id_categoria = (int)isset($_POST["id_categoria"]) ? $_POST["id_categoria"] : null;
       
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $data = array(
                "nombre_producto" => $nombre_producto,
                "precio_costo" => $precio_costo,
                "precio_venta" => $precio_venta,
                "iva" => $iva,
                "id_categoria" => $id_categoria
            );

            $resultado = ProductoModel::crearProductoModel($data);
            
            if ($resultado) {
                echo alertSuccess("Producto guardado");
            } else {
                echo alertError("Error al guardar el producto");
            }

        } 
        
    }

    static public function listaProductos()
    {
        $resultado = ProductoController::listaProductos();
        return $resultado;
    }
}