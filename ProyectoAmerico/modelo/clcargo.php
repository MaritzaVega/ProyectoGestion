<?php 

require_once "conexion.php";

class Cargo{

	public $idcargo;
	public $nomcargo;
	

	public function buscarCargo(){
		$conectar = new Conexion();
		$sql = "select * from cargo ";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}

}
?>