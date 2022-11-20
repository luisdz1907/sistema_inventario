<?php

require_once 'db/database.php';

class ProductoModel
{

    static public function listaProductosModel()
    {
        $query = "SELECT * FROM tbl_productos";
        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(); //Retorna valor unico
    }

    static public function crearProductoModel($data)
    {

        $query = "INSERT INTO tbl_productos(nombre_producto,precio_costo,precio_venta,iva,id_categoria)VALUES(:nombre_producto,:precio_costo,:precio_venta,:iva,:id_categoria)";

        $stmt = Conexion::conectarDB()->prepare($query);
        $stmt->bindParam(':nombre_producto', $data["nombre_producto"]);
        $stmt->bindParam(':precio_costo', $data["precio_costo"]);
        $stmt->bindParam(':precio_venta', $data["precio_venta"]);
        $stmt->bindParam(':iva', $data["iva"]);
        $stmt->bindParam(':id_categoria', $data["id_categoria"]);

        $resultado = $stmt->execute();

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }
}
