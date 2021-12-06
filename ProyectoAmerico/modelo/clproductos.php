<?php 

require_once "conexion.php";

class Producto{

	

	public function listar(){
		
		$conectar = new Conexion();
		//$estado= 'A';
		$instruccion = "select * from producto order by idproducto";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

								echo "<div class='div-table-cell' style='width: 4%;'>$columna[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;'>$columna[2]</div>";
								echo "<div class='div-table-cell' style='width: 6%;'>$columna[3]</div>";
                                echo "<div class='div-table-cell' style='width: 4%;'>$columna[4]</div>";
                                echo "<div class='div-table-cell' style='width: 5%;'>$columna[5]</div>";

                                
                                echo "<div class='div-table-cell' style='width: 5%;'><a href='../controlador/eliminarProducto.php?idproducto=".$columna['idproducto']."'><button type='button' class='btn btn-danger'>Eliminar</button></a></div>";
                                echo "<div class='div-table-cell' style='width: 3%;'><a href='../vista/editarProducto.php?idproducto=".$columna['idproducto']."'><button type='button' class='btn btn-primary'>Editar</button></a></div>";

						echo "</div>";
						         
					}
		

		$conectar->cerrarConexion();
	}

	public function Buscar($l){


		$conectar = new Conexion();
	
	
		$instruccion = "select * from producto where nombre like '".$l."%'  ORDER BY idproducto";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);



	
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

						echo "<div class='div-table-cell' style='width: 4%;'>$columna[1]</div>";
						echo "<div class='div-table-cell' style='width: 4%;'>$columna[2]</div>";
						echo "<div class='div-table-cell' style='width: 6%;'>$columna[3]</div>";
						echo "<div class='div-table-cell' style='width: 4%;'>$columna[4]</div>";
						echo "<div class='div-table-cell' style='width: 5%;'>$columna[5]</div>";

				
						echo "</div>";
						         
			}
	}

	
	public function listarBusqueda(){
		
		$conectar = new Conexion();
		//$estado= 'A';
		$instruccion = "select * from producto order by idproducto";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 


						echo "<div class='div-table-cell' style='width: 4%;'>$columna[1]</div>";
						echo "<div class='div-table-cell' style='width: 4%;'>$columna[2]</div>";
						echo "<div class='div-table-cell' style='width: 6%;'>$columna[3]</div>";
						echo "<div class='div-table-cell' style='width: 4%;'>$columna[4]</div>";
						echo "<div class='div-table-cell' style='width: 5%;'>$columna[5]</div>";




						echo "</div>";
						         
					}
		

		$conectar->cerrarConexion();
	}

	public function agregar($nom,$mar,$pre,$sto,$estadoS){

		$conectar = new Conexion();

		$instruccion = "select * from producto where nombre = '$nom'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		if ($columna = mysqli_fetch_array($consulta) ){

			echo "<script type=text/javascript>
			               alert('El producto ya se encuentra en el Sistema');
			               window.location.href= '../vista/RegistraProducto.php'
			     </script>";
		}else{
			
			//Insertar en la tabla Producto
			$instruccion = "insert into producto (nombre,marca,precio,stock,estadoStock) values ('$nom','$mar','$pre','$sto','$estadoS')";
			$consulta = mysqli_query($conectar->getConexion(),$instruccion);


			echo "<script type=text/javascript>
			               alert('Producto registrado exitosamente.');
			               window.location.href= '../vista/RegistraProducto.php'
			     </script>";
		}
	}

	public function editarProducto($nom,$mar,$pre,$sto,$estadoS){
		$conectar = new Conexion();

			
			//Insertar en la tabla Producto
			$instruccion = "UPDATE producto SET marca = '$mar', precio ='$pre', stock = '$sto', estadoStock = '$estadoS' WHERE nombre= '$nom'";
			$consulta = mysqli_query($conectar->getConexion(),$instruccion);


			echo "<script type=text/javascript>
			               alert('Producto modificado exitosamente.$nom');
			               window.location.href= '../vista/ListaProducto.php'
			     </script>";

	}

	public function buscarEstadoStock(){
		$conectar = new Conexion();
		$sql = "select * from producto ";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}

	public function buscarProducto($id){
		$conectar = new Conexion();
		$sql = "select * from producto where idproducto= '$id' ";

		$resultado= mysqli_query($conectar->getConexion(),$sql);

		if ( $columna = mysqli_fetch_array($resultado) ){

			$this->nombre =$columna[1];
			$this->marca = $columna[2];
			$this->precio = $columna[3];
			$this->stock = $columna[4];
			$this->estadoStock = $columna[5];
			
		}

		$conectar->cerrarConexion();	
				
	}

	public function eliminar($id){

		$conectar = new Conexion();

		$instruccion = "DELETE FROM producto WHERE idproducto = '$id'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);
		

		if($consulta){
			echo "<script type=text/javascript>
			               alert('Producto eliminado');
			               window.location.href= '../vista/ListaUsuarios.php'
			     </script>";
		}else{
			echo "<script type=text/javascript>
			               alert('Producto NO eliminado');
			               window.location.href= '../vista/ListaUsuarios.php'
			     </script>";
		}
		
	}

}
?>