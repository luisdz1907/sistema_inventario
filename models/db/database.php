<?php

class Conexion
{
    static public function conectarDB()
    {
        try {
            $con = new PDO(
                "mysql:host=localhost;dbname=sistema_inventarios",
                "root",
                "root"
            );
        } catch (PDOException $e) {
           echo $e->getMessage();
        }

        return $con;
    }
}
