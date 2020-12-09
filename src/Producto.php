<?php

    class Producto{
        private $nombre;
        private $precio;


        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }
        public function getPrecio(){
            return $this->precio;
        }
    }

    //TODO: Conexión BD para cargar datos en la vista
    

?>