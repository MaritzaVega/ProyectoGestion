<?php 
session_start();
require_once ("conexion.php");

class UsuarioAdmin{
	
	public $idusuarioadministrador;
	public $usuario;
	public $clave;

	//Sistema Comercial
	public function validar( $u , $p ){

		$conectar = new Conexion();
		$instruccion = "select * from iniciosession where user='$u' and password='$p'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		if ( $columna = mysqli_fetch_array($consulta) ){

			$_SESSION['iduser'] = $columna[0];
			$_SESSION['user'] = $columna[1];
			$_SESSION['password'] = $columna[2];
			

			$cargo = $columna[4];
			if($cargo==1){
				echo "<script>alert('Bienvenido Administrador $cargo');</script>";
				echo "<script type='text/javascript'> document.location ='../vista/HomeAdministrador.php'; </script>";
			}else{
				echo "<script>alert('Bienvenido Vendedor $cargo');</script>";
				echo "<script type='text/javascript'> document.location ='../vista/HomeVendedor.php'; </script>";
			}
	
		}else{

			echo "<script>alert('Datos Invalidos $p');</script>";
            echo "<script type='text/javascript'> document.location ='../index.php'; </script>";
		}

		$conectar->cerrarConexion();

	}


	//Sistema Comercial
	public function cambiar($p,$n,$u){

		$conectar = new Conexion();
		$instruccion = "UPDATE usuarios SET clave ='$n' WHERE clave= '$p' and usuario= '$u'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion)OR('hola');

			echo "<script>
                	alert('Contraseña actualizada');
                	window.location= '../index.php'
    			</script>";
				
		
		$conectar->cerrarConexion();
	}
	
}


?>