<?php
include "../modelo/clusuarios.php";

$id = $_REQUEST['idusuario'];
$usuario = new Usuario();
$usuario->eliminar($id);


?>