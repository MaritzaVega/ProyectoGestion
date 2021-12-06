<?php 

require_once "conexion.php";

class Conexions{

	public $idconexion;
	public $nombre;
	
	public function buscarConexion(){
		$conectar = new Conexion();
		$sql = "select * from tipoconexion ";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}

}
?>