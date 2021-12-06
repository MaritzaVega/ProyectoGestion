<?php 

require_once ("conexion.php");

class Admin{
	
	public $idadmin;
	public $nombre;
	public $email;
	public $celular;
	public $codigo;	

	public function buscarAdmin($u){
		$conectar = new Conexion();
		$sql = "select * from admin where codigo='$u'";

		$resultado= mysqli_query($conectar->getConexion(),$sql);

		if ( $columna = mysqli_fetch_array($resultado) ){

			$this->idadmin =$columna[0];
			$this->nombre = $columna[1];
			$this->email = $columna[2];			
			$this->celular = $columna[3];
			$this->codigo = $columna[4];	
		}

		$conectar->cerrarConexion();	
				
	}

	
}


?>