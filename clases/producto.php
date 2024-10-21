<?php

class Producto{

    function __construct()
    {
        require_once ('conexion.php');
        $this->conexion = new Conexion();
    }
}