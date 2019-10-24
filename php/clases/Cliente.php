<?php
    class Cliente{
        public $nombre;
        public $apellido;
        public  $direccion;
        public $dni;
        public  $id;
        public  $telefono;
        public  $celular;
        public  $fechaNacimiento;
        public  $pais;
        public  $provincia;
        public  $localidad;
        public  $email;
        public  $usuario;

        public function __construct($id,$nombre,$apellido,$direccion,$dni,$telefono,$cel,$fechaNacimiento,$pais,$provincia,$localidad,$email,$usuario){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->direccion = $direccion;
            $this->dni = $dni;
            $this->telefono = $telefono;
            $this->celular = $cel;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->pais = $pais;
            $this->provincia = $provincia;
            $this->localidad = $localidad;
            $this->email = $email;
            $this->usuario = $usuario;
        }
    }
?>