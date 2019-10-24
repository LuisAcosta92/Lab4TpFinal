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

    		$passEncriptado = md5($pass)

    		return $passEncriptado;

    	}

    	public function ValidarEdad($date){

    	}
    	
    }
?>