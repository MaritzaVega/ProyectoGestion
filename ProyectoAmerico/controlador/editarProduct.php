<?php
include "../modelo/clproductos.php";

$nombre = $_REQUEST['nombre'];
$marca = $_REQUEST['marca'];
$precio = $_REQUEST['precio'];
$stock = $_REQUEST['stock'];
$estadoStock = $_REQUEST['estadoStock'];


$registrar = new Producto();
$registrar->editarProducto($nombre,$marca,$precio,$stock,$estadoStock);

?>