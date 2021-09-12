<?php
    require_once 'Models/DatosModels.php';
    class CrudTienda extends DatosModels{

        public function CreateStudent(){
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

        public function ReadData($inicio,$fin){

            $sql = "SELECT *FROM ".$this->getTableName()." LIMIT $inicio, $fin";
            $statement = $this->conexion->prepare($sql);
            $statement->execute();

            $datos = $statement->fetchAll();

            return $datos;
        }

        public function UpdateStudent(){
            $sql = "UPDATE alumnos SET NAME = :name, LASTNAME = :lastName, AGE = :age, SEX = :sex, FECHA_NACIMIENTO = :fecha WHERE ID = ".$this->getId();
            $statement = $this->conexion->prepare($sql);

            $statement->execute(array(
                ":name" => $this->getNombre(),
                ":lastName" => $this->getApellidos(),
                ":age" => $this->getEdad(),
                ":sex" => $this->getSexo(),
                ":fecha" => $this->getFechaNacimiento()
            ));
        }

        public function DeleteStudent(){
            $sql = "DELETE FROM alumnos WHERE ID = :id";
            $statement = $this->conexion->prepare($sql);

            $statement->execute(array(
                ":id" => $this->getId()
            ));
        }
    }