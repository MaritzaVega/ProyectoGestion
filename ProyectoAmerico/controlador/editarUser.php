<?php
include "../modelo/clusuarios.php";

$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$numDoc = $_REQUEST['numDoc'];
$cargo = $_REQUEST['cargo'];


$registrar = new Usuario();
$registrar->editar($nombre,$apellidos,$numDoc,$cargo);

?>