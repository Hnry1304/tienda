<?php
    class DatosModels{

        protected $conexion;

        public function __construct(){
            $this->conexion = new Database();
            $this->conexion = $this->conexion->connect();
        }


    }