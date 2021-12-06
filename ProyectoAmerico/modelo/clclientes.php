<?php 

require_once "conexion.php";

class Cliente{

	

///////////////////////////////////////////////////////////////////////
	public function listar(){
		
		$conectar = new Conexion();
		//$estado= 'A';
		$conectar = new Conexion();
		$estado= 'realizado';
		$instruccion = "select * from expediente where estadoSolicitud = '$estado'";

		$consulta = mysqli_query($conectar->getConexion(),$instruccion);
		$columna = mysqli_fetch_array($consulta);								
		$a=$columna[0];


		$instruccion = "select * from cliente where idcliente=$a order by idcliente";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

								echo "<div class='div-table-cell' style='width: 4%;''>$columna[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[2]</div>";
								echo "<div class='div-table-cell' style='width: 6%;''>$columna[3]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[4]</div>";

								$a=$columna[5];
			            		$autor = "select * from distrito where iddistrito = $a ";
			            		$consultaautor = mysqli_query ($conectar->getConexion(),$autor);
			            		$resultadodistrito = mysqli_fetch_array ($consultaautor);

								echo "<div class='div-table-cell' style='width: 4%;'>$resultadodistrito[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[7]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[8]</div>";
							
								$a=$columna[9];
			            		$autor = "select * from documentoidentidad where iddocumentoidentidad = $a ";
			            		$consultaautor = mysqli_query ($conectar->getConexion(),$autor);
			            		$resultadoautor = mysqli_fetch_array ($consultaautor);

								echo "<div class='div-table-cell' style='width: 4%;''>$resultadoautor[1]</div>";

								echo "<div class='div-table-cell' style='width: 4%;''>$columna[10]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[11]</div>";

						echo "</div>";
						         
			}
		

		$conectar->cerrarConexion();
	}

//////////////////////////////////////////////////////////////////////////
	public function Buscar($l){


		$conectar = new Conexion();
		//$estado= 'A';
		$conectar = new Conexion();
		$estado= 'realizado';
		$instruccion = "select * from expediente where estadoSolicitud = '$estado'";

		$consulta = mysqli_query($conectar->getConexion(),$instruccion);
		$columna = mysqli_fetch_array($consulta);								
		$a=$columna[0];


		$instruccion = "select * from cliente where nombre like '".$l."%'  ORDER BY idcliente";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);


		
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

								echo "<div class='div-table-cell' style='width: 4%;''>$columna[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[2]</div>";
								echo "<div class='div-table-cell' style='width: 6%;''>$columna[3]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[4]</div>";

								$a=$columna[5];
			            		$autor = "select * from distrito where iddistrito = $a ";
			            		$consultaautor = mysqli_query ($conectar->getConexion(),$autor);
			            		$resultadodistrito = mysqli_fetch_array ($consultaautor);

								echo "<div class='div-table-cell' style='width: 4%;'>$resultadodistrito[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[7]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[8]</div>";
							
								$a=$columna[9];
			            		$autor = "select * from documentoidentidad where iddocumentoidentidad = $a ";
			            		$consultaautor = mysqli_query ($conectar->getConexion(),$autor);
			            		$resultadoautor = mysqli_fetch_array ($consultaautor);

								echo "<div class='div-table-cell' style='width: 4%;''>$resultadoautor[1]</div>";

								echo "<div class='div-table-cell' style='width: 4%;''>$columna[10]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[11]</div>";

						echo "</div>";
						         
			}
	}
	//Sistema Comercial
	public function listarME(){
		
		$conectar = new Conexion();
		//$estado= 'A';
		$instruccion = "select * from cliente order by idcliente";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

								echo "<div class='div-table-cell' style='width: 4%;'>$columna[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;'>$columna[2]</div>";
								echo "<div class='div-table-cell' style='width: 6%;'>$columna[3]</div>";

								$a=$columna[5];
			            		$autor = "select * from distrito where iddistrito = $a ";
			            		$consultaautor = mysqli_query ($conectar->getConexion(),$autor);
			            		$resultadodistrito = mysqli_fetch_array ($consultaautor);

								echo "<div class='div-table-cell' style='width: 4%;'>$resultadodistrito[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;'>$columna[10]</div>";
								
								$a=$columna[12];
			            		$autor = "select * from expediente where idexpediente = $a ";
			            		$consultaautor = mysqli_query ($conectar->getConexion(),$autor);
			            		$resultadoautor = mysqli_fetch_array ($consultaautor);

								echo "<div class='div-table-cell' style='width: 4%;'>$resultadoautor[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;'>$resultadoautor[2]</div>";

								$b=$resultadoautor[5];
			            		$editorial = "select * from empleados where idempleados = $b ";
			            		$consultaeditorial = mysqli_query ($conectar->getConexion(),$editorial);
			            		$resultadoeditorial = mysqli_fetch_array ($consultaeditorial);

								echo "<div class='div-table-cell' style='width: 4%;'>$resultadoeditorial[2]</div>";

						echo "</div>";
						         
					}
		

		$conectar->cerrarConexion();
	}
	
	
}
?>