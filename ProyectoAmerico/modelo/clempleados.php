<?php 

require_once ("conexion.php");

class Empleado{
	

	public $nombre;
	public $apellidos;
	public $numDoc;
	public $cargo;
	
	//BuscarEmpleado
	public function buscarEmpleado($id){
		
		$conectar = new Conexion();
		$emple = "select * from usuario where idusuario = '$id'";
		$consultaemple = mysqli_query ($conectar->getConexion(),$emple);

		if ( $columna2 = mysqli_fetch_array($consultaemple) ){


			$this->nombre = $columna2[1];			
			$this->apellidos = $columna2[2];
			$this->numDoc = $columna2[3];	

			$cli = "select * from cargo where idcargo = $columna2[4]";
			$consultacli = mysqli_query ($conectar->getConexion(),$cli);
			$resultadocar = mysqli_fetch_array ($consultacli);


			$this->cargo = $resultadocar[1];
			
			
		}
		$conectar->cerrarConexion();	
				
		//echo "<script type=text/javascript> alert('$resultadocar[1]');</script>";
	}


	////BuscarEmpleado2
	public function buscarEmpleado2(){
		$conectar = new Conexion();
		$sql = "select * from empleados where idrol=2";

		return $resultado= mysqli_query($conectar->getConexion(),$sql);
	}



	public function agregar($nombre,$apellido,$direccion,$calle,$distrito,$pais,$email,$celular,$tipodocumento,$numerodocumento ,$tipocliente,$tiposolicitud,$estadosolicitud,$fecha,$tipoconexion,$empleado,$nis){

		$conectar = new Conexion();
		$instruccion = "select * from usuario where idusuario = '$nis'";
		$consulta = mysqli_query($conectar->getConexion(),$instruccion);

		if ($columna = mysqli_fetch_array($consulta) ){

			echo "<script type=text/javascript>
			               alert('El Número de Suministro ya se encuentra en el Sistema');
			               window.location.href= '../vista/RegistraExpediente.php'
			     </script>";
		}else{
			
			//Insertar en la tabla expediente
			$instruccion = "insert into expediente values ('$nis','$tiposolicitud','$estadosolicitud','$fecha',$tipoconexion,$empleado)";
			$consulta = mysqli_query($conectar->getConexion(),$instruccion);

			//Insertar en la tabla cliente
			$instruccion2 = "insert into usuario values ('$idusuario','$nombre','$apellido', '$numDoc','$cargo')";
			$consulta2 = mysqli_query($conectar->getConexion(),$instruccion2);
	

			echo "<script type=text/javascript>
			               alert('Expediente registrado exitosamente.');
			               window.location.href= '../vista/RegistraExpediente.php'
			     </script>";
		}
	}

	
}