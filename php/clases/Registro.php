<?php
	 class Registro{
    	public function ValidarPass($pass1, $pass2){
    		$pass1Length = strlen($pass1);
    		$pass2Length = strlen($pass2);

    		if ($pass1 == $pass2 && isset($pass1) && isset($pass2) && 
    			$pass1Length >=6 && $pass2Length >= 6) {

    			return true;

    		}else{

				return false;

    		}
    	}

    	public function EncriptarPass($pass){

    		$passEncriptado = md5($pass);

    		return $passEncriptado;

    	}

    	public function ValidarEdad($date){

    	}
		
		public function CargarCliente($id,$nombre,$apellido,$direccion,$dni,$telefono,$cel,$fechaNacimiento,$pais,$provincia,$localidad,$email,$usuario){
			echo ("ESTO ES SEPARACION");
			var_dump($nombre);
			include_once ("php/clases/Cliente.php");
			 $NuevoCliente = new Cliente($id,$nombre,$apellido,$direccion,$dni,$telefono,$cel,$fechaNacimiento,$pais,$provincia,$localidad,$email,$usuario);
			// echo ("Estto es tora separacion");
			// var_dump($NuevoCliente);
			 return $NuevoCliente;
		}
    }
?>