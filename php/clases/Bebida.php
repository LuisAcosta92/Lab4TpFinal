<?php
        include ("Consumible.php")
    class Bebida extends Consumible{
        $marca;
        $litros;
        $alcohol;

        function Bebida ($precio,$nombre,$descripcion,$marca,$litros,$alcohol){
            parent::_construct($precio,$nombre,$descripcion);
            $this->$marca = $marca;
            $this->$litros = $litros;
            $this->$alcohol = $alcohol;
        }
    }
?>