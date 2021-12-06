<?php
include "../modelo/clusuariosadmin.php";

$c = $_SESSION["clave"];
$u = $_SESSION["usuario"];

$password = $_REQUEST['password'];
$newpassword = $_REQUEST['newpassword'];
$confirmpassword = $_REQUEST['confirmpassword'];

		if ( $c != $password ){
				
			echo "<script>
                	alert('Contraseña Invalida');
                	window.location= '../vista/CambiarContrasenaAdmin.php'
    			</script>";
		}else{
			$usuario = new UsuarioAdmin();
			$usuario->cambiar($password,$newpassword,$u);
		}


?>