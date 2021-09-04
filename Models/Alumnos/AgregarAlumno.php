<?php
    require_once 'Models/DatosModels.php';
    class AgregarAlumno extends DatosModels{

        private $nombre;
        private $apellidos;
        private $edad;
        private $sexo;
        private $fecha_nacimiento;


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

        public function agregar_alumno(){
            $sql = "INSERT INTO alumnos VALUES(
                NULL,:name,:lastName,:age,:sex,:fecha
            )";
            $statement = $this->conexion->prepare($sql);
            
            $statement->execute(array(
                ":name" => $this->getNombre(),
                ":lastName" => $this->getApellidos(),
                ":age" => $this->getEdad(),
                ":sex" => $this->getSexo(),
                ":fecha" => $this->getFechaNacimiento()
            ));
            
        }
    }