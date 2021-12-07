<?php
//include "../modelo/clusuarios.php";
include "../modelo/clusuariosadmin.php";

$u = $_POST['usuario'];
$p = $_POST['clave'];
//$t = $_REQUEST['tipo'];

		if ( trim($u) == '' || trim($p) == ''){
			header("Location: ../index.php");
		/*}else if($t == "Student"){
			$usuario = new Usuario();
			$usuario->validar($u,$p);*/
		}else {
			$admin = new UsuarioAdmin();
			$admin->validar($u,$p);
		}

?>
