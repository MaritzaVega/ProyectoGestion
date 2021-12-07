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

require_once "conexion.php";

class Usuario{

	

	public function listar(){
		
		$conectar = new Conexion();
		//$estado= 'A';
		$instruccion = "select * from usuario order by idusuario";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

								echo "<div class='div-table-cell' style='width: 4%;'>$columna[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;'>$columna[2]</div>";
								echo "<div class='div-table-cell' style='width: 6%;'>$columna[3]</div>";

                                $a=$columna[4];
			            		$usuario = "select * from cargo where idcargo = $a ";
			            		$consultausuario = mysqli_query ($conectar->getConexion(),$usuario);
			            		$resultadousuario = mysqli_fetch_array ($consultausuario);


								echo "<div class='div-table-cell' style='width: 4%;'>$resultadousuario[1]</div>";

                                echo "<div class='div-table-cell' style='width: 5%;'><a href='../controlador/eliminarUsuario.php?idusuario=".$columna['idusuario']."'><button type='button' class='btn btn-danger'>Eliminar</button></a></div>";
                                echo "<div class='div-table-cell' style='width: 3%;'><a href='../vista/editarUsuario.php?idusuario=".$columna['idusuario']."'><button type='button' class='btn btn-primary'>Editar</button></a></div>";


						echo "</div>";
						         
					}
		

		$conectar->cerrarConexion();
	}

	public function Buscar($l){


		$conectar = new Conexion();
	
	
		$instruccion = "select * from usuario where nombre like '".$l."%'  ORDER BY idusuario";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);



	
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

						echo "<div class='div-table-cell' style='width: 5%;'>$columna[1]</div>";
						echo "<div class='div-table-cell' style='width: 5%;'>$columna[2]</div>";
						echo "<div class='div-table-cell' style='width: 5%;'>$columna[3]</div>";

						$a=$columna[4];
						$usuario = "select * from cargo where idcargo = $a ";
						$consultausuario = mysqli_query ($conectar->getConexion(),$usuario);
						$resultadousuario = mysqli_fetch_array ($consultausuario);


						echo "<div class='div-table-cell' style='width: 5%;'>$resultadousuario[1]</div>";
				
						echo "</div>";
						         
			}
	}

	
	public function listarBusqueda(){
		
		$conectar = new Conexion();
		//$estado= 'A';
		$instruccion = "select * from usuario order by idusuario";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

								echo "<div class='div-table-cell' style='width: 5%;'>$columna[1]</div>";
								echo "<div class='div-table-cell' style='width: 5%;'>$columna[2]</div>";
								echo "<div class='div-table-cell' style='width: 5%;'>$columna[3]</div>";

                                $a=$columna[4];
			            		$usuario = "select * from cargo where idcargo = $a ";
			            		$consultausuario = mysqli_query ($conectar->getConexion(),$usuario);
			            		$resultadousuario = mysqli_fetch_array ($consultausuario);


								echo "<div class='div-table-cell' style='width: 5%;'>$resultadousuario[1]</div>";



						echo "</div>";
						         
					}
		

		$conectar->cerrarConexion();
	}

	public function agregar($nom,$ape,$dni,$car){
		$conectar = new Conexion();
		$instruccion = "select * from usuario where numDoc = '$dni'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		if ($columna = mysqli_fetch_array($consulta) ){

			echo "<script src='../js/usuarioExisteSistema.js'></script>";

		}else{
			
			//Insertar en la tabla Usuario
			$instruccion = "insert into usuario (nombre,apellidos,numDoc,cargo) values ('$nom','$ape','$dni','$car')";
			$consulta = mysqli_query($conectar->getConexion(),$instruccion);

			//Insertar en la tabla Usuario
			$instruccion = "insert into iniciosession (user, password,idestado,cargo) values ('$dni','$dni','1','$car')";
			$consulta = mysqli_query($conectar->getConexion(),$instruccion);

			echo "<script type=text/javascript>
			               alert('Usuario registrado exitosamente.');
			               window.location.href= '../vista/RegistraUsuario.php'
			     </script>";
		}
	}
	
	public function editar($nom,$ape,$dni,$car){
		$conectar = new Conexion();

			
			//Insertar en la tabla Usuario
			$instruccion = "UPDATE usuario SET nombre ='$nom', apellidos= '$ape', cargo ='$car' WHERE numDoc= '$dni'";
			$consulta = mysqli_query($conectar->getConexion(),$instruccion);

			//Insertar en la tabla Usuario
			$instruccion = "UPDATE iniciosession SET cargo ='$car' WHERE user= '$dni'";
			$consulta = mysqli_query($conectar->getConexion(),$instruccion);

			echo "<script type=text/javascript>
			               alert('Usuario modificado exitosamente.$dni');
			               window.location.href= '../vista/ListaUsuarios.php'
			     </script>";

	}


	public function buscarUsuarios(){
		$conectar = new Conexion();
		$sql = "select * from usuario ";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}
	

	public function eliminar($id){

		$conectar = new Conexion();

		$instruccion = "select numDoc from usuario WHERE idusuario = '$id'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);
		while ( $columna = mysqli_fetch_array($consulta) ){
		$num = $columna['numDoc'];
		}

		$instruccion = "DELETE FROM usuario WHERE idusuario = '$id'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		$instruccion = "DELETE FROM iniciosession WHERE user= '$num'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion) or die("fff");
		

		if($consulta){
			echo "<script type=text/javascript>
			               alert('Alumno eliminado');
			               window.location.href= '../vista/ListaUsuarios.php'
			     </script>";
		}else{
			echo "<script type=text/javascript>
			               alert('Alumno NO eliminado');
			               window.location.href= '../vista/ListaUsuarios.php'
			     </script>";
		}
		
	}

}
?>