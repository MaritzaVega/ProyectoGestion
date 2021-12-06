<?php 

require_once "conexion.php";

class Pais{

	public $idpais;
	public $nombre;
	
	public function buscarPais(){
		$conectar = new Conexion();
		$sql = "select * from pais";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}

}
?>