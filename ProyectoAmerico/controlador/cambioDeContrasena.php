<?php
include "../modelo/clusuarios.php";

$c = $_SESSION["clave"];
$u = $_SESSION["usuario"];

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
			$usuario->cambiar($password,$newpassword,$u);
		}


?>