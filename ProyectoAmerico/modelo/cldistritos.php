<?php 

require_once "conexion.php";

class Distrito{

	public $iddistrito;
	public $nombre;
	public $idprovincia;
	
	public function buscarDistrito(){
		$conectar = new Conexion();
		$sql = "select * from distrito ";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}

}
?>