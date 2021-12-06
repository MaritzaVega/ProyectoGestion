<?php 

require_once "conexion.php";

class Expediente{

	public $idexpediente;
	public $tipoSolicitud;
	public $estadoSolicitud;
	public $fecha;
	public $idtipoconexion;
	public $idempleado;
	

	public function listar(){
		
		$conectar = new Conexion();
		$estado= 'proceso';
		$instruccion = "select * from expediente where estadoSolicitud = '$estado'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		
			while ( $columna = mysqli_fetch_array($consulta) ){

						echo "<div class='div-table-row div-table-row-list'>"; 

								echo "<div class='div-table-cell' style='width: 8%;''>$columna[1]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[2]</div>";
								echo "<div class='div-table-cell' style='width: 4%;''>$columna[3]</div>";
																
								$a=$columna[4];
			            		$tc = "select * from tipoconexion where idtipoconexion = $a ";
			            		$consultatc = mysqli_query ($conectar->getConexion(),$tc);
			            		$resultadotc = mysqli_fetch_array ($consultatc);

								echo "<div class='div-table-cell' style='width: 6%;''>$resultadotc[1]</div>";

								$b=$columna[5];
			            		$emp = "select * from empleados where idempleados = $b ";
			            		$consultaemp = mysqli_query ($conectar->getConexion(),$emp);
			            		$resultadoemp = mysqli_fetch_array ($consultaemp);

								echo "<div class='div-table-cell' style='width: 6%;''>$resultadoemp[2] $resultadoemp[3]</div>";

								$c= $columna[0]; //idexpediente
			            		$cli = "select * from cliente where idexpediente = $c ";
			            		$consultacli = mysqli_query ($conectar->getConexion(),$cli);
			            		$resultadocli = mysqli_fetch_array ($consultacli);

								echo "<div class='div-table-cell' style='width: 6%;''>$resultadocli[1] $resultadocli[2] </div>"; //nombre completo cliente

								echo "<div class='div-table-cell' style='width: 6%;''>$resultadocli[3]</div>"; //direccion

								echo "<div class='div-table-cell' style='width: 6%;''>$resultadocli[8]</div>"; //celular

								echo "<div class='div-table-cell' style='width: 6%;''>$resultadocli[10]</div>"; //numero doc

								echo "<div class='div-table-cell' style='width: 6%;''>$resultadocli[11]</div>"; //tipo cliente

						echo "</div>";
						         
					}
		

		$conectar->cerrarConexion();
	}


}
?>
