<?php
include "../modelo/clproductos.php";

$id = $_REQUEST['idproducto'];
$producto = new Producto();
$producto->eliminar($id);


?>