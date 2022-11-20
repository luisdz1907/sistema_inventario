<?php
require_once 'models/productoModel.php';

class ProductoController{

    public function crearProducto(){
        $nombre_producto = $_POST["nombre_producto"];
        $precio_costo = $_POST["precio_costo"];
        $precio_venta = $_POST["precio_venta"];
        $iva = $_POST["iva"];
        $id_categoria = (int)$_POST["id_categoria"];
       
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