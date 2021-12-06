<?php

include "../modelo/clempleados.php";

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$direccion = $_REQUEST['direccion'];
$calle = $_REQUEST['calle'];
$distrito = $_REQUEST['distrito'];
$pais = $_REQUEST['pais'];
$email = $_REQUEST['email'];
$celular = $_REQUEST['celular'];
$tipodocumento = $_REQUEST['tipodocumento'];
$numerodocumento = $_REQUEST['numerodocumento'];
$tipocliente = $_REQUEST['tipocliente'];
$tiposolicitud= $_REQUEST['tiposolicitud'];
$estadosolicitud= $_REQUEST['estadosolicitud'];
$fecha= $_REQUEST['fecha'];
$tipoconexion= $_REQUEST['tipoconexion'];
$empleado= $_REQUEST['empleado'];
$nis= $_REQUEST['nis'];


$registrar = new Empleado();
$registrar->agregar($nombre,$apellido,$direccion,$calle,$distrito,$pais,$email,$celular,$tipodocumento,$numerodocumento ,$tipocliente,$tiposolicitud,$estadosolicitud,$fecha,$tipoconexion,$empleado,$nis);


?>