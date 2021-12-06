<?php 

require_once "conexion.php";

class InicioSession{

	public $iduser;
	public $user;
    public $pasword;
    public $idestado;
	public $cargo;

	public function buscarInicioSession(){
		$conectar = new Conexion();
		$sql = "select * from iniciosession ";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}

}
?>