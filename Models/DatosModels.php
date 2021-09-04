<?php
    class DatosModels{

        private $id;
        private $nombre;
        private $apellidos;
        private $edad;
        private $sexo;
        private $fecha_nacimiento;
        protected $conexion;

        public function __construct(){
            $this->conexion = new Database();
            $this->conexion = $this->conexion->connect();
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        
        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        
        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function setFechaNacimiento($fecha_nacimiento){
            $this->fecha_nacimiento = $fecha_nacimiento;
        }

        public function getId(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function getFechaNacimiento(){
            return $this->fecha_nacimiento;
        }
    }