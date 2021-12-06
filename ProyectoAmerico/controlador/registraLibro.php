<?php
include "../modelo/cllibros.php";

$titulo = $_REQUEST['titulo'];
$ejemplar = $_REQUEST['ejemplar'];
$idioma = $_REQUEST['idioma'];
$tema = $_REQUEST['tema'];
$ISBN = $_REQUEST['ISBN'];
$estado = $_REQUEST['estado'];
$autor = $_REQUEST['autor'];
$editorial = $_REQUEST['editorial'];
$proveedor = $_REQUEST['proveedor'];


$registrar = new Libro();
$registrar->agregar($titulo,$ejemplar,$idioma,$tema,$ISBN,$estado,$autor,$editorial,$proveedor);

?>