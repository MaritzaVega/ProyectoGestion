<?php 

require_once "conexion.php";

class Documento{

	public $iddocumento;
	public $tipo;
	
	public function buscarDocumento(){
		$conectar = new Conexion();
		$sql = "select * from documentoidentidad ";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}

}
?>