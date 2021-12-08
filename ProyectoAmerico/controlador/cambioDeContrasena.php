<?php
include "../modelo/clusuarios.php";

$c = $_SESSION["clave"];
$u = $_SESSION["usuario"];
$n = $_SESSION['nombre'];

$password = $_REQUEST['password'];
$newpassword = $_REQUEST['newpassword'];
$confirmpassword = $_REQUEST['confirmpassword'];

		if ( $c != $password ){
				
			echo "<script>
                	alert('Contraseña Invalida');
                	window.location= '../vista/CambiarContrasena.php'
    			</script>";
		}else{
			$usuario = new Usuario();
			$usuario->listar($password,$newpassword);
		}


?>