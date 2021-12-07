<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../style.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
</body>

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
				echo "<script src='../js/BienvenidoAdmi.js'></script>";
			}else{
				echo "<script src='../js/BienvenidoVen.js'></script>";
			}
	
		}else{

			echo "<script src='../js/datosinvalidosAlerta.js'></script>";
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